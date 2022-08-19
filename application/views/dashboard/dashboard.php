<?php if ($this->session->userdata('login_session')['role'] == 1) { ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <!-- Striped rows start -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-3">Pengajuan Berita Baru</h4>
                                        <hr>
                                    </div>
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Judul</th>
                                                        <th scope="col">Pemohon</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($berita as $key => $data) {
                                                        if ($data->status == 0) { ?>
                                                            <tr>
                                                                <th scope="row"><?= $no++ ?></th>
                                                                <td><?= $data->judul ?></td>
                                                                <td><?= $data->penulis ?></td>
                                                                <td><a href="<?= base_url('pengajuanBerita/pengajuan/') . $data->id_berita ?>" class="btn btn-circle btn-sm btn-primary"><i class="fa fa-fw fa-info"></i></a></td>
                                                            </tr>
                                                    <?php }
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Striped rows end -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <!-- Striped rows start -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-3">Laporan Kegiatan Baru</h4>
                                        <hr>
                                    </div>
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Judul Kegiatan</th>
                                                        <th scope="col">Wilayah</th>
                                                        <th scope="col">Tanggal</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($laporan as $key => $data) { ?>
                                                        <tr>
                                                            <th scope="row"><?= $no++ ?></th>
                                                            <td><?= $data->judul_kegiatan ?></td>
                                                            <td><?= $data->nama_wilayah ?></td>
                                                            <td><?= $data->date ?></td>
                                                            <td><a href="<?= base_url('laporan/detail/') . $data->id_laporan ?>" class="btn btn-circle btn-sm btn-primary"><i class="fa fa-fw fa-info"></i></a></td>
                                                        </tr>
                                                    <?php
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Striped rows end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } elseif ($this->session->userdata('login_session')['role'] == 2) { ?>
    <section id="dashboard-analytics">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card bg-analytics text-white">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <img src="<?= base_url() ?>assets/app-assets/images/elements/decore-left.png" class="img-left" alt="card-img-left">
                                <img src="<?= base_url() ?>assets/app-assets/images/elements/decore-right.png" class="img-right" alt="card-img-right">
                                <div class="avatar avatar-xl bg-primary shadow mt-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-award white font-large-1"></i>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h1 class="mb-2 text-white">Welcome <?= userdata('nama') ?>,</h1>
                                    <p class="m-auto w-75">Selamat datang di admin panel wilayah<strong>Si-Potensi</strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-users text-primary font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                            <p class="mb-0">Jumlah anggota <strong>Gudep</strong></p>
                        </div>
                        <div class="card-content">
                            <div id="subscribe-gain-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-users text-warning font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                            <p class="mb-0">Jumlah anggota <strong>SAKA</strong></p>
                        </div>
                        <div class="card-content">
                            <div id="subscribe-gain-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-credit-card text-success font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                            <p class="mb-0">Jumlah Laporan Kegiatan</p>
                        </div>
                        <div class="card-content">
                            <div id="subscribe-gain-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-layout text-danger font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                            <p class="mb-0">Jumlah Laporan Kegiatan</p>
                        </div>
                        <div class="card-content">
                            <div id="subscribe-gain-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>