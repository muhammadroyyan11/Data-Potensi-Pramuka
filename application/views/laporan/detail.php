<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><?= $title ?></h4>
                    <?php
                    if (userdata('role') == 2) { ?>
                        <div class="pull-right">
                            <a href="<?= site_url('laporan') ?>" class="btn btn-secondary btn-flat">
                                <i class="fa fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    <?php }  elseif (userdata('role') == 1) { ?>
                        <div class="pull-right">
                            <a href="<?= site_url('kegiatan') ?>" class="btn btn-secondary btn-flat">
                                <i class="fa fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <?= $this->session->flashdata('pesan'); ?>
                        <div>
                            <table class="table">
                                <tr>
                                    <th width="300px">Judul Kegiatan</th>
                                    <th>:</th>
                                    <td><?= $row->judul_kegiatan ?></td>
                                </tr>
                                <tr>
                                    <th>Deskripsi Singkat</th>
                                    <th>:</th>
                                    <td><?= $row->deskripsi ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kegiatan</th>
                                    <th>:</th>
                                    <td><?= $row->date ?></td>
                                </tr>
                                <tr>
                                    <th>Lampiran</th>
                                    <th>:</th>
                                    <td><a href="<?= base_url() ?>assets/uploads/laporan/<?= $row->lampiran ?>"><?= $row->lampiran ?></a>
                                        <br><small style="color: #d1112a;">Klik nama file untuk download</small>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>