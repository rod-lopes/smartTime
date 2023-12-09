<?php

//Verifica o mes corrente
$mes_corrente = date('m');
$hoje = date('d/m/Y');

$date = date("Y-m-d");
$dataAtual = strtotime ($date);

/*
//Total KM no mes
$soma_km = $pdo->query("SELECT SUM(km) as soma FROM lancamentos WHERE MONTH(createdAt) = '$mes_corrente'")->fetchColumn();
//imprime com as pontuação e virgula
$total_km = number_format($soma_km, 2, ",",".");


//Conta Bicicletas
$cont_bike = $pdo->query("SELECT COUNT(id) as contagem FROM bicicletas")->fetchColumn();

//Conta Bicicletas locadas
$cont_locada = $pdo->query("SELECT COUNT(id) as locadas FROM bicicletas WHERE status=1")->fetchColumn();

$bike_disponivel = 0;
$bike_disponivel = $cont_bike - $cont_locada;

// Ranking dos Colaboradores do Mês
$ranking = $pdo->query("SELECT SUM(km) as ranking FROM lancamentos WHERE MONTH(createdAt) = '$mes_corrente' ORDER BY colaborador_id ASC LIMIT 10 ");
$rank_col = $ranking->fetchAll(PDO::FETCH_ASSOC);
$ranking_total = @count($rank_col);
*/
?>

<!-- Content wrapper -->
<div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Olá <?php echo current ($primeiroNome); ?></h5>
                        <p class="mb-4">
                          Esse mês você fez  <span class="fw-bold"> 
                          <!--
                          <?php 
                          // Imprimindo quantidade de bicicletas disponíveis para locação.
                          if ($bike_disponivel == 0){
                            echo "nenhuma";
                            ?></span> bicicleta disponível <?php
                          }                    
                          elseif ($bike_disponivel == 1){
                            echo $bike_disponivel;
                            ?></span> bicicleta disponível <?php
                          } elseif ($bike_disponivel > 1){
                            echo $bike_disponivel;
                            ?></span> bicicletas disponíveis<?php
                          }
                           ?> -->horas trabalhadas. </span> Verifique a lista das atividades registradas no botão abaixo.
                        </p>

                        <a href="javascript:;" class="btn btn-sm btn-outline-primary">Lançamentos</a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="assets/img/illustrations/metas.png" height="140"
                          alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                          data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAv1JREFUSEvFlV2IVHUYxn/POWd23ZSFhC7KJZeSamZkDMEgiPIqspDow+xCg0BCIrEL6aKiD6qriOgTQqKoIOwipA+jIEjK7pZKnTOTaW7iRQRBsmDbzv/ME2d213Y+zlCC9F4Nc57z/t73/3/O+4oLHLrA+RkOWOPReJS7IrjFbdYhJgED0zLft+Gz7CI+ZEqtokILAXHFm4DXRSdpYRiOC3aGVF8OEg0EJBU/BTyZvyA4ZbGPjE/DMn7I/0sC19JmM3APMLGQeE9I9UIvpA+wJPmMxbaszseg/FgGhKO4zBZFvIUZE+xupXp5qbALEFe9WeYjxJ+R2TCXqv5vTFCq+jqbQ0AE3BRSfbP43j+AilckcAy41LA9S/Veb/Kk4k4nIVVf56WyH7Z4EWiGMWqLF39OWCr7QYvXgDSkrB10LMMAVDySwHSnQHNH1tD+hTucrzOp+ACwSeKhVl05qC+GAuZzPAc8arM3a+iBbkDVpzGrkpgrZ4/o5/ME3AB8DXwXUq3vBZzNnRDOMsa0ZocCzCQN/dKnqXplYn4H/gipLu49ohlgRcgY50flv/sirvhk/uFZnMxibuSwTneJ1ng8GeEMMBNSjfd20MRcHbWpzTV1ZKA9r/KqUsIhw2rDdAbXk+rXRW2p7PUWU/NGUbULUKr6fZt7MY+Ehp4v9H/NE3HgoOAKmR2tht5c1CZlP454RuLdVl33dQHisrdLvAP8FFKuAbULIXknMXe3GnrpnGajk9JvnDBcbtiapfqgC8CEx0rjNHOB4P5WqrcLAQMelCreZcjHxLEwR43j+qsbkPt4rW+mzefnMSo22Hy7MCo2hlS5VTvRP+zKfgzxLHDGEduyo/qkuBNHcZWtMnuB5RK7WnW9ulQ/eFxX/QTm6VyYW1JmH3AgzHKYiJFkNB8l3I7ZAlw2L+tM0ld6iyleOGXfpog38q972F10Fk6bHaGpg4N0w1fmpJfFy7kzMrcaasDqhZV5wmaKiC+yS9jPVwpFRfzPS/+/+LRA+zcqsDEoz4Io7QAAAABJRU5ErkJggg=="/>
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="javascript:void(0);">Saiba Mais</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Horas no Mês</span>
                        <h3 class="card-title mb-2">20</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAeNJREFUSEu11b9rFGEQxvHvk3svhahgJaJWirib8weIVhFJYQJREBtBsVawshFU7BU7QUjU2iJRRLRRRLm/QNC4G4IiimKhIJhGz31vR3KYM0t2s2fubsvdeecz77zLvKLPj/qcn1LABXaYAcZJOYDYDqxHfARiwfOkwTTv9K2o0EJgcJftTJvcAYZLdvlD4koS6WZeXC5QCWxcYgpY23ELjQdenCTW76VrlgFuyEaAZxiVjpP/C3zoYx0vBmq21aVEwLrc5AOM+Dequ9DqwKGCAi75WNcWv2V24EJ7AowVVt4Z0HAVwl8zer+Qpw0M1ixIU+IV29IZsJD1ho90PgO4wC4grvcEgLc+1o4MUA3trsGpHgH4edbwWT/bLXKBPUWMdgLkxbjQLPP3iL1JpFdLgceIoz0DjH3JrF62gUpotwRnVvHv5y7xjo281tc2UA3trMFkj4AvPtbmzCGz27Y4z6deACYmmpHOZQGgGtqUwYkukUalyZ7GnOaWAQS2yak1KjZ0gVz2sa7mjoqFly60YUR9lcPukY91bMVp2kKGbAzj/n+Na7jn4XTpuF7U/144t4GDJe2al3ExmdVEXlz5lVmzUVKOAPuBba0rEz4AM4IXiZgm0veiIkqBLg67tbTvwB+da6oZTi8tYgAAAABJRU5ErkJggg=="/>
                        </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                              <a class="dropdown-item" href="javascript:void(0);">Saiba Mais</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Horas Totais</span>
                        <h3 class="card-title text-nowrap mb-1">1000</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total Revenue -->
              <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="row row-bordered g-0">
                    <div class="col-md-8">
                      <h5 class="card-header m-0 me-2 pb-3">Gráfico</h5>
                      <div id="totalRevenueChart" class="px-2"></div>
                    </div>
                    <div class="col-md-4">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary" type="button"
                              id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              2022
                            </button>
                          </div>
                        </div>
                      </div>
                      <div id="growthChart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Total Revenue -->
              <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbpJREFUSEvVlL9rFFEUhb+zOxt/oSnsJagBZ1ZiYR9bMRDsRMFCSBXBQtAmtlrYiKilFhGRWIv+AWkSBCVBZxW2EtFUFgELM3dzZaKBsJt9b7Kwha8+937vnnfeFUM+GnJ/KgGSzH23i1iuaH1UUDYeOqCKjUnqt03Mk2ttpz4+QebHEnEZ5wJwZqvY+QC8sQYvWdW3RuqzLp44tDvOJC392Ib0B5z0I8kIz4HpwAQu8aom5jqbvAXG5cwULT0NAyb8UGIsAaer2AMsm3OpAReLlh5GLWo0fd6dq93Nt1Oz66M7D6ylm901PRaNND3bdD5Cb4SDANgwZ2yn/yWsB1BP/bHE9VDu+8UWmLNc94IW1TNvC04MCFi0XJNBQJL5L+DggICflutoDLAOHK6Ynm7ZuuUaDQNSX0FMDAh4b7nOhgFNv49zayCAuGufdCcI2Jf6eEd8Bmp7hJiV4cj1NfrR6pk/E1zbC8DhUSfXjehH2xL8XRXvgLQiZNk2OEdbv6sBStVxH00O8AJnKrLsFoo6M6yqjHfPia7r/ad8zGpcAc7/W9cFsCLxujAW+KLvoSmjgIoW9ZX9/4A/4oieGRfofyQAAAAASUVORK5CYII="/>
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                              <a class="dropdown-item" href="javascript:void(0);">Saiba Mais</a>
                            </div>
                          </div>
                        </div>
                        <span class="d-block mb-1">Hora HT</span>
                        <h3 class="card-title text-nowrap mb-2">100</h3>
                        <small class="text-success fw-semibold">HT no mês</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAilJREFUSEvFlTtrFFEYhp93Z3JTjIooKilEULOziShE0CYaxAtiEbERYyGCIogK6fwFlopCQFBQLFJGsFAxGLVQIqSIuLMIwU68kCJ2ZnNmP5khkcVMZgck5JRn3vM9333EMh8ts30aAvzA3gC9qY4Yr11FfVlO5gFYlgEXKtPGCgI6rM1rZ0hwPisCg4dRlctMaTZNlx5Bh7X5a3iL6IkfyXhUEyORz3s+6mdrt22fcwxKXASagXFX5WAaJBXgBzYC9APfEAOurLE075qL1lUTL4HNMobnKjr7r24RoKlk+8z4kAjFYVfWq4VHfmBJwesL6xetFxF3GgWju1rRp3rIIoAX2APBBRP3o7LiFPw9aYD4Y1PJhs04Y3A3CnUtE+AXbRKxG3HclfUiD8AvWR9GHOm4C7U/GxDYDLDW/WYdX/QrDVB/l6Sr0zb4BaaBaRdqYyNAbLTdwRZCfc8F2GVbfY+vwIwLtb4RIC5SyeBEFOpZnl3lddlJ1XgKTLpQexoV+Y7gKvDEhTqVB+AH9hw4hnHLVTSYCWjptJ1Rgc+xKE8UXtH6JeK5wRM7ZsuaygQkwsDuCS4BPzDOuYpG0yLxu+woNR4Dm0wMRWVdaThoiWCbtfqreAfsTeatflXUaPEiegritMHAvMEJ18YBJjSXD7AAWc1NjOvJTKefGnDbwQ1CVdMkK7iu591ZWA9LddP//3CKNoY4tARg1IU6ktXKDVOUZw5WFPAHjxHZGXXoCwQAAAAASUVORK5CYII="/>                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt1">
                              <a class="dropdown-item" href="javascript:void(0);">Saiba Mais</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Horas Banco</span>
                        <h3 class="card-title mb-2">10</h3>
                        <small class="text-success fw-semibold">Horas Totais</small>
                      </div>
                    </div>
                  </div>
                  <!-- </div>
    <div class="row"> -->
                  <div class="col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                          <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                              <h5 class="text-nowrap mb-2">Horas Totais</h5>
                              <span class="badge bg-label-warning rounded-pill">Ano 2023</span>
                            </div>
                            <div class="mt-sm-auto">
                              <h3 class="mb-0">2000</h3>
                            </div>
                          </div>
                          <div id="profileReportChart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <!-- Transactions -->
              <div class="col-md-6 col-lg-12 order-2 mb-4">
                <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Categorias</h5>
                  </div>
                  <?php
                  /*
                  $query = $pdo->query("SELECT SUM(km) as ranking FROM lancamentos ORDER BY colaborador_id ASC LIMIT 10 ");
                  $res = $query->fetchAll(PDO::FETCH_ASSOC);
                  $total_reg = @count($res);
                  if($total_reg > 0){
                  */ 
                    ?>
                  <div class="card-body">
                    <ul class="p-0 m-0">
                      <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                          <img src="assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0">Atendimento Help Tech</h6>
                          </div>
                          <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0"></h6>
                            <span class="text-muted">100</span>
                          </div>
                        </div>
                      </li>
                      <?php /* } */?>
                    </ul>
                  </div>
                </div>
              </div>
              <!--/ Transactions -->
            </div>
          </div>
          <!-- / Content -->

         