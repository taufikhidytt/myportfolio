<div class="header-body">
    <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">My Portfolio</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/blog')?>"><?= $judul?></a></li>
        </ol>
        </nav>
    </div>
    </div>
    <!-- Card stats -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Table Blog</h3>
                    <a href="<?= base_url('admin/blog/add')?>" class="btn btn-primary btn-sm">
                        <i class="ni ni-check-bold"></i> Tambah Data
                    </a>
                </div>
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Judul</th>
                                    <th>Description Blog Content</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach($blog->result() as $result):?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $result->judul?></td>
                                    <td><?= substr($result->description, 0, 30)?></td>
                                    <td>
                                        <a href="<?= base_url('admin/blog/photo/'.$result->id)?>" class="btn btn-success btn-sm">
                                            <i class="ni ni-image"></i>
                                        </a> |
                                        <a href="<?= base_url('admin/blog/ubah/'.$result->id)?>" class="btn btn-primary btn-sm">
                                            <i class="ni ni-settings-gear-65"></i>
                                        </a> |
                                        <a href="<?= base_url('admin/blog/hapus/'.$result->id)?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">
                                            <i class="ni ni-fat-remove"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>