<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><?= $title ?></h4>
                    <div class="pull-right">
                        <a href="<?= site_url('berita/add') ?>" class="btn btn-primary btn-flat">
                            <i class="fa fa-user-plus"></i> Tambah Berita
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Kegiatan</th>
                                        <th>Deskripsi</th>
                                        <th>Isi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pengajuan as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data->judul ?></td>
                                            <td><?= $data->penulis ?></td>
                                            <td><?= $data->isi ?></td>
                                            <td>
                                                <?php if ($data->status == 0) {
                                                    echo 'Diajukan';
                                                } elseif ($data->status == 1) {
                                                    echo 'Disetujui';
                                                } else {
                                                    echo 'Ditolak';
                                                } ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('pengajuanBerita/pengajuan/') . $data->id_berita ?>" class="btn btn-circle btn-sm btn-primary"><i class="fa fa-fw fa-info"></i></a>
                                                <a href="<?= base_url('pengajuanBerita/del/') . $data->id_berita ?>" onclick="return confirm('Yakin ingin hapus?')" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>