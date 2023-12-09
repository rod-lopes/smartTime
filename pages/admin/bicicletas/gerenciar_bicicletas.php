<?php

@session_start();
$hoje = date('d/m/Y');
$agora = date('now');
//Verifica o mes corrente
$mes_corrente = date('n');
$dia_corrente =  date('d');
?>

<?php 
          //RECEBER O NUMERO DA PAGINA
          $pagina_atual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
          $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
          
          //SETAR A QUANTIDADE DE REGISTROS POR PÁGINA
          $limite_resultado = 20;
          $início_contagem = 19;
          
        // CALCULAR O INICIO DA VISUALIZAÇÃO
            $inicio = ($limite_resultado * $pagina) - $limite_resultado;
          
	$query = $pdo->query("SELECT * from bicicletas ORDER BY (numero) ASC LIMIT $inicio, $limite_resultado");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){ 
		?>


<!-- Content wrapper -->
 <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bicicletas /</span> Gerenciar Bicicletas</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Gerenciar Bicicletas</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Número</th>
                        <th>Nome Colaborador</th>
                        <th>Status</th>
                        <th>Ações</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php 
                    //Seleciona os lançamentos do mês corrente na tabela
				  	for($i=0; $i < $total_reg; $i++){
						foreach ($res[$i] as $key => $value){	}
						$numero = $res[$i]['numero'];
                        $colaborador_id = $res[$i]['colaborador_id'];
                        $emprestada = $res[$i]['status'];

						?>
                      <tr>
                        <td><?php
              
						$query_2 = $pdo->query("SELECT * from colaboradores where id = '$colaborador_id'");
						$res_2 = $query_2->fetchAll(PDO::FETCH_ASSOC);
						$colaborador = $res_2[0]['nome'];
            ?> 
                        
                        <strong><?php echo $numero; ?></strong></td>
                        <td><?php echo $colaborador; ?></td>
                        <td>
                          <?php

                          if ($emprestada == 1){
                            ?>
                            <span class="badge bg-label-primary me-1">Emprestada</span>
                            <?php
                          }elseif ($emprestada == 0){
                          ?>

                          <span class="badge bg-label-success me-1">Disponível</span>
                          <?php
                          }
                          ?>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Editar</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Deletar</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>

                      <?php
                    }

                    ?>

                      
                      
                    </tbody>
                  </table>

                  <?php }else{ ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo 'Não existem lançamentos para serem exibidos'; ?>
                    </div>                                         
        		
        	    <?php } ?>
        	    
                <?php
        	    
        	    //CONTAR A QUANITDADE DE REGISTROS NO BD
            $query_qnt_registros = "SELECT COUNT(id) AS num_result FROM bicicletas ORDER BY (numero)";
            $result_qnt_registros = $pdo->prepare($query_qnt_registros);
            $result_qnt_registros->execute();
            $row_qnt_registros = $result_qnt_registros->fetch(PDO::FETCH_ASSOC);
            
            //Quantidade de página
            $qnt_pagina = ceil($row_qnt_registros['num_result'] / $limite_resultado);
            
            // Maximo de link
            $maximo_link = 1;
            
            $registros_pagina = $limite_resultado * $pagina;
            if ($registros_pagina>$row_qnt_registros['num_result']){
            $registros_pagina = $row_qnt_registros['num_result'];
            }else {
                $registros_pagina = $limite_resultado * $pagina;
            }
            $registros_pagina_final = $registros_pagina - $início_contagem;
            if ($registros_pagina_final<0){
                $registros_pagina_final=1;
            }

            ?>

                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

              <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-end">
                            <li class="page-item prev">
                              <a class="page-link" href="index.php?page=1&l=gerenciar_lancamentos"
                                ><i class="tf-icon bx bx-chevrons-left"></i
                              ></a>
                            </li>
                            <?php
                      
                      for ($pagina_anterior = $pagina - $maximo_link; $pagina_anterior <= $pagina - 1; $pagina_anterior++) {
                if ($pagina_anterior >= 1) { ?>
                            <li class="page-item">
                              <a class="page-link" href="index.php?page=<?php echo $pagina_anterior; ?>&l=gerenciar_lancamentos"><?php echo $pagina_anterior; ?></a>
                            </li>
                            <?php
                }
                
                      }
                      ?>
                            <li class="page-item active">
                              <a class="page-link" href="#"><?php echo $pagina; ?></a>
                            </li>
                            <?php
                      
                      for ($proxima_pagina = $pagina + 1; $proxima_pagina <= $pagina + $maximo_link; $proxima_pagina++) {
                if ($proxima_pagina <= $qnt_pagina) {
                      ?>
                            <li class="page-item">
                              <a class="page-link" href="index.php?page=<?php echo $proxima_pagina; ?>&l=gerenciar_lancamentos"><?php echo $proxima_pagina; ?></a>
                            </li>
                            <?php
                }
                
                      }
                      ?>
                            <li class="page-item next">
                              <a class="page-link" href="index.php?page=<?php echo $qnt_pagina; ?>&l=gerenciar_lancamentos"
                                ><i class="tf-icon bx bx-chevrons-right"></i
                              ></a>
                            </li>
                          </ul>
                        </nav>
              
            </div>
            <!-- / Content -->

