<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data User</h4>
                    <div class="pull-right">
                        <a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-flat">
                            <i class="fa fa-user-plus"></i> Tambah
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aktivasi</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>No. telp</th>
                                        <th>Role</th>
                                        <th>Wilayah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $no = 1;
                                    foreach ($users as $key => $data) {
                                        if ($data['role'] != 1) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td>
                                                    <a href="<?= base_url('user/toggle/') . $data['id_user'] ?>" class="btn btn-circle btn-sm <?= $data['is_active'] ? 'btn-secondary' : 'btn-success' ?>" title="<?= $data['is_active'] ? 'Nonaktifkan User' : 'Aktifkan User' ?>"><i class="fa fa-fw fa-power-off"></i></a>
                                                </td>
                                                <td><?= $data['nama']; ?></td>
                                                <td><?= $data['username']; ?></td>
                                                <td><?= $data['email']; ?></td>
                                                <td><?= $data['no_telp']; ?></td>
                                                <td>
                                                    <?php if ($data['role'] == 2) { ?>
                                                        Admin
                                                    <?php } elseif ($data['role'] == 3) { ?>
                                                        Anggota
                                                    <?php } ?>
                                                </td>
                                                <td><?= $data['nama_wilayah']; ?></td>
                                                <td>

                                                    <a href="<?= base_url('user/edit/') . $data['id_user'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                                    <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('user/delete/') . $data['id_user'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>