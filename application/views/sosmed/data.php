<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data <?= $title ?></h4>

                    <div class="pull-right">
                        <!-- <a href="<?= site_url('categori/add') ?>" class="btn btn-primary btn-flat">
                            <i class="fa fa-files-plus"></i> Tambah
                        </a> -->
                        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-files-plus"></i> Tambah
                        </button>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Sosial Media</th>
                                        <th>Icon</th>
                                        <th>Link</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        $no = 0;
                                        foreach ($sosmed as $key => $data) {
                                            $no++; ?>
                                            <td><?= $no ?></td>
                                            <td><?= $data->nama_sosmed ?></td>
                                            <td><i class="fa <?= $data->icon ?>"></i></td>
                                            <td><?= $data->link ?></td>
                                            <th>
                                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('sosmed/del/') . $data->id_sosmed ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </th>
                                    </tr>
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

<!-- Modal -->
<div class="modal fade text-left" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Add Sosmed</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('sosmed/proses') ?>" method="post">
                <div class="modal-body">
                    <label>Nama Sosial Media : </label>
                    <div class="form-group">
                        <input type="text" name="sosmed" id="name" placeholder="name" class="form-control">
                    </div>
                    <label>Icon Sosial Media : </label>
                    <div class="form-group">
                        <select name="icon" class="select2 form-control" id="example">
                            <option value="">-- Pilih Icon --</option>
                            <option value="fa-facebook">Facebook</option>
                            <option value="fa-twitter">Twitter</option>
                            <option value="fa-instagram">Instagram</option>
                            <option value="fa-youtube-play">Youtube</option>
                            <option value="fa-pinterest">Pinterest</option>
                        </select>
                    </div>
                    <label>Link Sosial Media : </label>
                    <div class="form-group">
                        <input type="text" name="link" id="name" placeholder="link" class="form-control">
                        <small>eg : https://facebook.com/yourSosialMedia</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>