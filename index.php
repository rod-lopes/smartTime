<?php

@session_start();
require_once('conexao.php');
require_once('verificar-permissao.php');
$hoje = date('d/m/Y');
$ano = date('Y');



//BUSCAR A PÁGINA CORRESPONDENTE
$pagina = "pages/admin/inicial.php";
$pagina_usuario = "pages/usuario/inicial.php";
if (isset($_GET['l'])) {
    $pagina = 'pages/admin/lancamentos/' . $_GET['l'] . ".php";
}

if (isset($_GET['b'])) {
  $pagina = 'pages/admin/bicicletas/' . $_GET['b'] . ".php";
}

if (isset($_GET['c'])) {
  $pagina = 'pages/admin/colaboradores/' . $_GET['c'] . ".php";
}


if (isset($_GET['n'])) {
  $pagina = 'pages/admin/niveis/' . $_GET['n'] . ".php";
}

if (isset($_GET['p'])) {
  $pagina = 'pages/admin/perfil/' . $_GET['p'] . ".php";
}

if (isset($_GET['r'])) {
  $pagina = 'pages/admin/relatorios/' . $_GET['r'] . ".php";
}

//RECUPERAR DADOS DO USUÁRIO
$query = $pdo->query("SELECT * from colaboradores WHERE id = '$_SESSION[id_usuario]'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nivel = $res[0]['nivel_id'];
$nome_usu = $res[0]['nome'];
$primeiroNome = explode(" ", $nome_usu);
$id = $res[0]['id'];

?>



<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title><?php echo $nome_sistema; ?></title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.php" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="assets/img/logo/logo.png" alt="Modal Bike">
            </span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>


          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Usuário</span>
          </li>
          <!-- Lançamentos -->
          <li class="menu-item">
            <a href="index.php?l=gerenciar_lancamentos" class="menu-link">
              <i class="menu-icon tf-icons bx bx-file"></i>
              <div data-i18n="Basic">Meus Lançamentos</div>
            </a>
          </li>
          <!-- Sair -->
          <li class="menu-item">
            <a href="logout.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-exit"></i>
              <div data-i18n="Basic">Sair</div>
            </a>
          </li>
          <!-- Perfil Administrador -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Administrador</span></li>

          <!-- User interface -->
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-box"></i>
              <div data-i18n="User interface">Relatórios</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="index.php?b=gerenciar_bicicletas" class="menu-link">
                  <div data-i18n="Accordion">Bicicletas</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="index.php?c=gerenciar_colaboradores" class="menu-link">
                  <div data-i18n="Alerts">Colaboradores</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="index.php" class="menu-link">
                  <div data-i18n="Badges">Gráficos</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
              class="menu-link">
              <i class="menu-icon tf-icons bx bx-file"></i>
              <div data-i18n="Documentation">Documentação</div>
            </a>
          </li>
          <!-- Sair -->
          <li class="menu-item">
            <a href="logout.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-exit"></i>
              <div data-i18n="Basic">Sair</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Localizar..."
                  aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block"><?php echo current($primeiroNome);?></span>
                          <small class="text-muted">
                            <?php 
                            //Inserindo nível usuário
                            if ($nivel == 1){
                              ?> Administrador<?php
                            }else { ?>
                              Colaborador <?php
                            }
                            ?>
                          </small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">Meu Perfil</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-basic.html">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Sair</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <?php
          if ($nivel == 1){
            include($pagina);
          }elseif ($nivel == 2){
            include($pagina_usuario);
          }
          ?>

           <!-- Footer -->
           <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , feito com ❤️ por <?php echo $nome_sistema; ?></a>
              </div>
              <div>
                <a href="#"
                  target="_blank" class="footer-link me-4">Documentação</a>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->

        
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

  <script>
    $(document).ready( function () {
        $('#myTable').DataTable({
              language: {
            info: 'Mostrando páginas _PAGE_ de _PAGES_',
            infoEmpty: 'Nenhum registro disponível',
            infoFiltered: '(filtrado de _MAX_ registros no total)',
            lengthMenu: 'Mostrando _MENU_ registros por página',
            zeroRecords: 'Nada Encontrado'
        }
        });
    } );
  </script>



</body>

</html>