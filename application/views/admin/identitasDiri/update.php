<script src="<?= base_url('assets/admin/ckeditor4/ckeditor.js') ?>"></script>

<div class="header-body">
    <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">My Portfolio</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/identitasDiri')?>">Identitas Diri</a></li>
            <li class="breadcrumb-item"><a href="#"><?= $judul?></a></li>
        </ol>
        </nav>
    </div>
    </div>
    <!-- Card stats -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Update Identitas Diri</h3>
                    <a href="<?= base_url('admin/identitasDiri')?>" class="btn btn-primary btn-sm" style="float: right;">
                        <i class="ni ni-curved-next"></i> Back
                    </a>
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="<?= $identitas->id?>">
                            <label for="nama">Nama Lengkap :</label>
                            <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" placeholder="Masukan Nama Anda" value="<?= set_value('nama', $identitas->nama_lengkap)?>">
                            <span class="text-danger"><?= form_error('nama')?></span>
                        </div>
                        <div class="form-group">
                            <label for="profesi">Profesi :</label>
                            <input type="text" name="profesi" id="profesi" class="form-control" autocomplete="off" placeholder="Masukan Profesi Anda" value="<?= set_value('profesi', $identitas->profesi)?>">
                            <span class="text-danger"><?= form_error('profesi')?></span>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur :</label>
                            <input type="text" name="umur" id="umur" class="form-control" autocomplete="off" placeholder="Masukan Umur Anda" value="<?= set_value('umur', $identitas->umur)?>">
                            <span class="text-danger"><?= form_error('umur')?></span>
                        </div>
                        <div class="form-group">
                            <label for="negara">Negara Asal :</label>
                            <input type="text" name="negara" id="negara" class="form-control" autocomplete="off" placeholder="Masukan Negara Anda" value="<?= set_value('negara', $identitas->negara_asal)?>">
                            <span class="text-danger"><?= form_error('negara')?></span>
                        </div>
                        <div class="form-group">
                            <label for="tempat_kerja">Tempat Kerja :</label>
                            <input type="text" name="tempat_kerja" id="tempat_kerja" class="form-control" autocomplete="off" placeholder="Masukan Tempat Kerja Anda" value="<?= set_value('tempat_kerja', $identitas->tempat_kerja)?>">
                            <span class="text-danger"><?= form_error('tempat_kerja')?></span>
                        </div>
                        <div class="form-group">
                            <label for="daerah_tinggal">Nama Daerah Tinggal :</label>
                            <input type="text" name="daerah_tinggal" id="daerah_tinggal" class="form-control" autocomplete="off" placeholder="Masukan Daerah Asal Anda" value="<?= set_value('daerah_tinggal', $identitas->daerah_tinggal)?>">
                            <span class="text-danger"><?= form_error('daerah_tinggal')?></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="text" name="email" id="email" class="form-control" autocomplete="off" placeholder="Masukan email Anda" value="<?= set_value('email', $identitas->email)?>">
                            <span class="text-danger"><?= form_error('email')?></span>
                        </div>
                        <div class="form-group">
                            <label for="bahasa">Bahasa :</label>
                            <input type="text" name="bahasa" id="bahasa" class="form-control" autocomplete="off" placeholder="Masukan Bahasa Yang Anda Kuasai" value="<?= set_value('bahasa', $identitas->bahasa)?>">
                            <span class="text-danger"><?= form_error('bahasa')?></span>
                        </div>
                        <div class="form-group">
                            <label for="tahun_pengalaman">Berapa Tahun Pengalaman Anda :</label>
                            <input type="text" name="tahun_pengalaman" id="tahun_pengalaman" class="form-control" autocomplete="off" placeholder="Masukan Berapa Tahun Pengalaman Anda" value="<?= set_value('tahun_pengalaman', $identitas->tahun_pengalaman)?>">
                            <span class="text-danger"><?= form_error('tahun_pengalaman')?></span>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Ceritakan Deskripsi Tentang Anda :</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" autocomplete="off" placeholder="Ceritakan Tentang Diri Anda"><?= set_value('deskripsi', $identitas->deskripsi)?></textarea>
                            <span class="text-danger"><?= form_error('deskripsi')?></span>
                        </div>
                        <div class="form-group">
                            <label for="photo">Update Photo Anda :</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                            <span class="text-success">*) info: format wajib png, jpg, jpeg, max 5 mb</span>
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

<script>
    CKEDITOR.replace('deskripsi');
</script>