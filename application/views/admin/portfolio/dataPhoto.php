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
                    <h3>Table Photo Portfolio &nbsp;<?= $nama->nama?></h3>
                    <a href="<?= base_url('admin/portfolio')?>" class="btn btn-primary btn-sm" style="float: right;">
                        <i class="ni ni-curved-next"></i> Back
                    </a>
                    <a href="<?= base_url('admin/portfolio/addPhoto/'.$id->id)?>" class="btn btn-primary btn-sm">
                        <i class="ni ni-check-bold"></i> Tambah Data
                    </a>
                </div>
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Photo Portfolio</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach($photoPortfolio as $result):?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td>
                                        <img src="<?= base_url('assets/upload/'.$result->nama_photo)?>" alt="Photo" width="20%">
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/portfolio/hapusPhoto/'.$result->id_photo)?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Ingin Menghapus Photo Ini?')">
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