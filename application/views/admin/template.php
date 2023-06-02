
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title><?= $title ?></title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url()?>assets/admin/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/css/argon.css?v=1.1.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="<?= base_url('admin/dashboard')?>">
          <h2 class="">My Portfolio</h2>
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/dashboard')?>">
                <i class="ni ni-tv-2 text-cyan"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
              <a class="nav-link" href="<?= base_url('admin/identitasDiri')?>">
                <i class="ni ni-circle-08 text-blue"></i>
                <span class="nav-link-text">Identitas Diri</span>
              </a>
              <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                <i class="ni ni-spaceship text-pink"></i>
                <span class="nav-link-text">Experience</span>
              </a>
              <div class="collapse" id="navbar-forms">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?= base_url('admin/skils')?>" class="nav-link">Skils</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/education')?>" class="nav-link">Education</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/experience')?>" class="nav-link">Experience</a>
                  </li>
                </ul>
              </div>
              <a class="nav-link" href="<?= base_url('admin/portfolio')?>">
                <i class="ni ni-briefcase-24 text-black"></i>
                <span class="nav-link-text">Portfolio</span>
              </a>
              <a class="nav-link" href="<?= base_url('admin/medsos')?>">
                <i class="ni ni-square-pin text-green"></i>
                <span class="nav-link-text">Media Sosial</span>
              </a>
              <a class="nav-link" href="<?= base_url('admin/blog')?>">
                <i class="ni ni-ruler-pencil text-warning"></i>
                <span class="nav-link-text">Blogs</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?= base_url()?>assets/admin/assets/img/brand/favicon.png">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Hii, Superadmin</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url('login/logout')?>" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary">
      <div class="container-fluid">
        <?= $contents ?>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url()?>assets/admin/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/admin/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url()?>assets/admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url()?>assets/admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?= base_url()?>assets/admin/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url()?>assets/admin/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url()?>assets/admin/assets/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?= base_url()?>assets/admin/assets/js/demo.min.js"></script>
</body>

</html>