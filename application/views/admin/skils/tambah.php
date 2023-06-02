<div class="header-body">
    <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">My Portfolio</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/skils')?>">Skils</a></li>
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
                    <h3>Tambah Data Skils</h3>
                    <a href="<?= base_url('admin/skils')?>" class="btn btn-primary btn-sm" style="float: right;">
                        <i class="ni ni-curved-next"></i> Back
                    </a>
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/skils/addProcess')?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Skils :</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Skils Anda" autocomplete="off" value="<?= set_value('nama')?>">
                            <span class="text-danger"><?= form_error('nama')?></span>
                        </div>
                        <div class="form-group">
                            <label for="persentase">Persentase Skils :</label>
                            <input type="text" name="persentase" id="persentase" class="form-control" placeholder="Masukan Angka Presentase Skils Anda" autocomplete="off" value="<?= set_value('persentase')?>">
                            <span class="text-danger"><?= form_error('persentase')?></span>
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