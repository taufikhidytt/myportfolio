<div class="header-body">
    <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">My Portfolio</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/portfolio')?>">Portfolio</a></li>
            <li class="breadcrumb-item"><a href="#"><?= $judul?></a></li>
        </ol>
        </nav>
    </div>
    </div>
    <!-- Card stats -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Tambah Data Portfolio</h3>
                    <a href="<?= base_url('admin/portfolio')?>" class="btn btn-primary btn-sm" style="float: right;">
                        <i class="ni ni-curved-next"></i> Back
                    </a>
                </div>
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card-body">
                    <form action="<?= base_url('admin/portfolio/addProcess')?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Project :</label>
                            <input type="text" name="nama" id="nama" autocomplete="off" class="form-control" placeholder="Masukan Nama Project" value="<?= set_value('nama')?>">
                            <span class="text-danger"><?= form_error('nama')?></span>
                        </div>
                        <div class="form-group">
                            <label for="bahasa">Bahasa Pemograman Di Pakai :</label>
                            <input type="text" name="bahasa" id="bahasa" autocomplete="off" class="form-control" placeholder="Masukan Bahasa Pemograman Di Pakai" value="<?= set_value('bahasa')?>">
                            <span class="text-danger"><?= form_error('bahasa')?></span>
                        </div>
                        <div class="form-group">
                            <label for="client">Nama Client :</label>
                            <input type="text" name="client" id="client" autocomplete="off" class="form-control" placeholder="Masukan Nama Client" value="<?= set_value('client')?>">
                            <span class="text-danger"><?= form_error('client')?></span>
                        </div>
                        <div class="form-group">
                            <label for="link">Link Project :</label>
                            <input type="text" name="link" id="link" autocomplete="off" class="form-control" placeholder="Masukan Link Project, Jika Belum live Tulis Local" value="<?= set_value('link')?>">
                            <span class="text-danger"><?= form_error('link')?></span>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success btn-sm">
                            <i class="ni ni-send"></i> Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>