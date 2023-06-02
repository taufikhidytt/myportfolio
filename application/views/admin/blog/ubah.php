<script src="<?= base_url('assets/admin/ckeditor4/ckeditor.js') ?>"></script>

<div class="header-body">
    <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">My Portfolio</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/blog')?>">Blog</a></li>
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
                    <h3>Update Blog</h3>
                    <a href="<?= base_url('admin/blog')?>" class="btn btn-primary btn-sm" style="float: right;">
                        <i class="ni ni-curved-next"></i> Back
                    </a>
                </div>
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="<?= $blog->id?>">
                            <label for="judul">Judul Blog :</label>
                            <input type="text" name="judul" id="judul" autocomplete="off" class="form-control" placeholder="Masukan Judul Blogs" value="<?= set_value('judul', $blog->judul)?>">
                            <span class="text-danger"><?= form_error('judul')?></span>
                        </div>
                        <div class="form-group">
                            <label for="description">Isi Blog :</label>
                            <textarea name="description" id="description" class="form-control"><?= set_value('description', $blog->description)?></textarea>
                            <span class="text-danger"><?= form_error('description')?></span>
                        </div>
                        <input type="hidden" name="created_at" id="created_at" value="<?= $nama->nama_lengkap?>">
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
    CKEDITOR.replace('description');
</script>