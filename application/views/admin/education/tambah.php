<script src="<?= base_url('assets/admin/ckeditor4/ckeditor.js') ?>"></script>

<div class="header-body">
    <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">My Portfolio</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/education')?>">Education</a></li>
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
                    <h3>Tambah Data Education</h3>
                    <a href="<?= base_url('admin/education')?>" class="btn btn-primary btn-sm" style="float: right;">
                        <i class="ni ni-curved-next"></i> Back
                    </a>
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/education/addProcess')?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Education :</label>
                            <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" placeholder="Masukan Nama Education Anda" value="<?= set_value('nama')?>">
                            <span class="text-danger"><?= form_error('nama')?></span>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan :</label>
                            <input type="text" name="jurusan" id="jurusan" class="form-control" autocomplete="off" placeholder="Masukan Jurusan Anda" value="<?= set_value('jurusan')?>">
                            <span class="text-danger"><?= form_error('jurusan')?></span>
                        </div>
                        <div class="form-group">
                            <label for="tahun_mulai">Tahun Mulai Education :</label>
                            <input type="text" name="tahun_mulai" id="tahun_mulai" class="form-control" autocomplete="off" placeholder="Masukan Tahun Mulai Education Anda" value="<?= set_value('tahun_mulai')?>">
                            <span class="text-danger"><?= form_error('tahun_mulai')?></span>
                        </div>
                        <div class="form-group">
                            <label for="tahun_akhir">Tahun Akhir Education :</label>
                            <input type="text" name="tahun_akhir" id="tahun_akhir" class="form-control" autocomplete="off" placeholder="Masukan Tahun Akhir Education Anda Dan Jika Belum Lulus Tulis Sekarang" value="<?= set_value('tahun_akhir')?>">
                            <span class="text-danger"><?= form_error('tahun_akhir')?></span>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Education:</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" autocomplete="off" placeholder="Masukan Deskripsi Education Anda"><?= set_value('deskripsi')?></textarea>
                            <span class="text-danger"><?= form_error('deskripsi')?></span>
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

<script>
    CKEDITOR.replace('deskripsi');
</script>