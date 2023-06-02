<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title><?= $title?></title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url()?>assets/admin/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/css/argon.css?v=1.1.0" type="text/css">
</head>

<body class="bg-default">
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5 mt--5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">Selamat Datang Di <b class="text-success">My Portfolio</b>, Buatlah Informasi Yang Bermanfaat Untukmu Dan Sekitarmu.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--7 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7 col-sm-12">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent">
              <div class="text-muted text-center">
                <small><b>Sign In My Portfolio</b></small>
              </div>
            </div>
            <?= $this->session->flashdata('pesan');?>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" action="<?= base_url('login/cek_login')?>" method="POST">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" name="username" placeholder="Username" type="text" autocomplete="off" value="<?= set_value('username')?>">
                  </div>
                    <span class="text-danger"><?= form_error('username')?></span>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Password" type="password">
                  </div>
                  <span class="text-danger"><?= form_error('password')?></span>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary my-4">
                    <i class="ni ni-spaceship"></i> Sign in
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; <?= date('Y')?> <a href="https://www.instagram.com/taufikhidytt_" class="font-weight-bold ml-1" target="_blank">Taufik Hidayat</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url()?>assets/admin/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/admin/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url()?>assets/admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url()?>assets/admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url()?>assets/admin/assets/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?= base_url()?>assets/admin/assets/js/demo.min.js"></script>
</body>

</html>