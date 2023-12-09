<?php

@session_start();
$hoje = date('d/m/Y');
$agora = date('now');
//Verifica o mes corrente
$mes_corrente = date('n');
$dia_corrente =  date('d');
?>

<?php           
	$query = $pdo->query("SELECT * from lancamentos ORDER BY (data) ASC ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
		?>

<!-- Content wrapper -->
 <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Lançamentos /</span> Meus Lançamentos</h4>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Gerenciar Lançamentos</h5>
                <h5 class="card-header"><strong>Clique Aqui </strong> para registrar um novo lançamento</h5>
                <?php
	                  if($total_reg > 0){ 
                  ?>
                <div class="table-responsive text-nowrap">
                <table id="myTable" class="display">
    <thead>
        <tr>
            <th>Data</th>
            <th>Atividades</th>
            <th>Tempo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
    <?php 
                    //Seleciona os lançamentos do mês corrente na tabela
				  	for($i=0; $i < $total_reg; $i++){
						foreach ($res[$i] as $key => $value){	}
						$data = $res[$i]['data'];
                        $colaborador_id = $res[$i]['colaborador_id'];
                        $categoria_id = $res[$i]['categoria_id'];
                        $tempo = $res[$i]['tempo'];

            $query_2 = $pdo->query("SELECT * from categorias where id = '$categoria_id'");
            $res_2 = $query_2->fetchAll(PDO::FETCH_ASSOC);
            $categoria = $res_2[0]['categoria'];

						?>
        <tr>
            <td><?php echo $data; ?></td>
            <td><?php echo $categoria; ?></td>
            <td><?php echo $tempo; ?></td>
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
  <div class="card-header">
                    <div class="alert alert-danger" role="alert">
                    <?php echo 'Não existem lançamentos para serem exibidos'; ?>
                    </div>   
</div>                                      
        		
        	    <?php } ?>

                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
              
            </div>
            <!-- / Content -->

