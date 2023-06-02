<script src="<?= base_url('assets/admin/ckeditor4/ckeditor.js') ?>"></script>

<div class="header-body">
    <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">My Portfolio</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/experience')?>">Experience</a></li>
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
                    <h3>Update Experience</h3>
                    <a href="<?= base_url('admin/experience')?>" class="btn btn-primary btn-sm" style="float: right;">
                        <i class="ni ni-curved-next"></i> Back
                    </a>
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="<?= $experience->id?>">
                            <label for="nama">Nama Institusi :</label>
                            <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" placeholder="Masukan Nama Experience Anda" value="<?= set_value('nama', $experience->nama_experience)?>">
                            <span class="text-danger"><?= form_error('nama')?></span>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi :</label>
                            <input type="text" name="lokasi" id="lokasi" class="form-control" autocomplete="off" placeholder="Masukan Lokasi Anda" value="<?= set_value('lokasi', $experience->lokasi)?>">
                            <span class="text-danger"><?= form_error('lokasi')?></span>
                        </div>
                        <div class="form-group">
                            <label for="tahun_mulai">Tahun Mulai Experience :</label>
                            <input type="text" name="tahun_mulai" id="tahun_mulai" class="form-control" autocomplete="off" placeholder="Masukan Tahun Mulai Experience Anda" value="<?= set_value('tahun_mulai', $experience->tahun_mulai)?>">
                            <span class="text-danger"><?= form_error('tahun_mulai')?></span>
                        </div>
                        <div class="form-group">
                            <label for="tahun_akhir">Tahun Akhir Experience :</label>
                            <input type="text" name="tahun_akhir" id="tahun_akhir" class="form-control" autocomplete="off" placeholder="Masukan Tahun Akhir Experience Anda Dan Jika Anda Masih Bekerja Tulis Sekarang" value="<?= set_value('tahun_akhir', $experience->tahun_akhir)?>">
                            <span class="text-danger"><?= form_error('tahun_akhir')?></span>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Experience:</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" autocomplete="off" placeholder="Masukan Deskripsi Experience Anda"><?= set_value('deskripsi', $experience->deskripsi)?></textarea>
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