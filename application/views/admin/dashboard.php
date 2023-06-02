<div class="header-body">
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">My Portfolio</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><?= $judul?></a></li>
            </ol>
            </nav>
        </div>
    </div>
    <?= $this->session->flashdata('pesan');?>
    <!-- Card stats -->
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <a href="<?= base_url('admin/portfolio')?>">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Portfolio</h5>
                                <span class="h2 font-weight-bold mb-0"><?= $portfolio?></span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="<?= base_url('admin/skils')?>">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Skils</h5>
                                <span class="h2 font-weight-bold mb-0"><?= $skils?></span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="<?= base_url('admin/experience')?>">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">experience</h5>
                                <span class="h2 font-weight-bold mb-0"><?= $experience?></span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="ni ni-money-coins"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="<?= base_url('admin/blog')?>">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Blogs</h5>
                                <span class="h2 font-weight-bold mb-0"><?= $blogs?></span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                <i class="ni ni-chart-bar-32"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>