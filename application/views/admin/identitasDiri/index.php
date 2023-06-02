<div class="header-body">
    <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">My Portfolio</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/identitasDiri')?>"><?= $judul?></a></li>
        </ol>
        </nav>
    </div>
    </div>
    <!-- Card stats -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Table Identitas Diri</h3>
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Nama Lengkap</th>
                                    <th>Profesi</th>
                                    <th>Umur</th>
                                    <th>Negara Asal</th>
                                    <th>Tempat Pekerjaan Sekarang</th>
                                    <th>Daerah Tinggal</th>
                                    <th>Email</th>
                                    <th>Bahasa</th>
                                    <th>Berapa Tahun Pengalaman</th>
                                    <th>Deskripsi Diri Anda</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($identitas->result() as $result):?>
                                <tr>
                                    <td>
                                        <a href="<?= base_url('assets/upload/'.$result->photo)?>" target="blank">
                                            <img src="<?= base_url('assets/upload/'.$result->photo)?>" alt="<?= $result->nama_lengkap?>" class="avatar avatar-sm rounded-circle">
                                        </a>
                                    </td>
                                    <td><?= $result->nama_lengkap?></td>
                                    <td><?= $result->profesi?></td>
                                    <td><?= $result->umur?></td>
                                    <td><?= $result->negara_asal?></td>
                                    <td><?= $result->tempat_kerja?></td>
                                    <td><?= $result->daerah_tinggal?></td>
                                    <td><?= $result->email?></td>
                                    <td><?= $result->bahasa?></td>
                                    <td><?= $result->tahun_pengalaman?></td>
                                    <td><?= substr( $result->deskripsi, 0, 50 )?></td>
                                    <td>
                                        <a href="<?= base_url('admin/identitasDiri/update/'.$result->id)?>" class="btn btn-primary btn-sm">
                                            <i class="ni ni-settings-gear-65"></i>
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