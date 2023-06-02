<div class="header-body">
    <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">My Portfolio</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/blog')?>">Blog</a></li>
            <li class="breadcrumb-item"><a href="#">Data Photo</a></li>
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
                    <h3>Tambah Photo Blog</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/blog/addPhotoProcess')?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id_blog" id="id_blog" value="<?= $result->id?>">
                            <label for="photo">Photo :</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                        </div>
                        <button class="btn btn-success btn-sm" name="submit" type="submit">
                            <i class="ni ni-send"></i> Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>