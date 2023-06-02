<div class="header-body">
    <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">My Portfolio</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/medsos')?>">Media Sosial</a></li>
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
                    <h3>Tambah Data Media Sosial</h3>
                    <a href="<?= base_url('admin/medsos')?>" class="btn btn-primary btn-sm" style="float: right;">
                        <i class="ni ni-curved-next"></i> Back
                    </a>
                </div>
                <?php $this->session->flashdata('pesan');?>
                <div class="card-body">
                    <form action="<?= base_url('admin/medsos/addProcess')?>" method="post">
                        <div class="form-group">
                            <label for="link">Link Medsos :</label>
                            <input type="text" name="link" id="link" class="form-control" placeholder="Contoh: https://www.instagram.com/namaanda" value="<?= set_value('link')?>">
                            <span class="text-danger"><?= form_error('link')?></span>
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon Medsos :</label>
                            <input type="text" name="icon" id="icon" class="form-control" placeholder="Contoh: fa fa-instagram" value="<?= set_value('icon')?>">
                            <span class="text-danger"><?= form_error('icon')?></span>
                            <span class="text-green">
                                *) Icon Lain Anda Bisa Klik Di <a href="https://fontawesome.com/v4.7/icons/" target="blank">Sini</a>
                            </span>
                        </div>
                        <button class="btn btn-success btn-sm" type="submit" name="submit">
                            <i class="ni ni-send"></i> Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>