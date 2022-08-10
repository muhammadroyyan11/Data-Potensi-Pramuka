<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><?= $title ?></h4>
                    <div class="pull-right">
                        <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#large">
                            <i class="fa fa-user-plus"></i> Tambah Laporan
                        </button>
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
                                        <th>Lampiran File</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($laporan as $key => $data) {
                                        if ($data->user_id == userdata('id_user')) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data->judul_kegiatan ?></td>
                                                <td><?= $data->deskripsi ?></td>
                                                <td><a href="<?= base_url() ?>assets/uploads/laporan/<?= $data->lampiran ?>"><?= $data->lampiran ?></a></td>
                                                <td><?= $data->date ?></td>
                                                <td>
                                                    <a href="<?= base_url('laporan/detail/') . $data->id_laporan ?>" class="btn btn-circle btn-sm btn-primary"><i class="fa fa-fw fa-info"></i></a>
                                                </td>
                                            </tr>
                                    <?php }
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

<div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Laporan Kegitan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('laporan/proses'); ?>
                <div class="modal-body">
                    <label>Judul Kegiatan: </label>
                    <div class="form-group">
                        <input type="text" name="judul_kegiatan" placeholder="Judul Kegiatan" class="form-control">
                    </div>

                    <label>Uraian Singkat: </label>
                    <div class="form-group">
                        <textarea name="deskripsi" id="" class="form-control" cols="10" rows="10"></textarea>
                    </div>

                    <label>Lampiran: </label>
                    <div class="form-group">
                        <input type="file" name="lampiran" placeholder="Lampiran" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>