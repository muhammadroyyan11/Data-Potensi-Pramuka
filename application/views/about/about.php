<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit About</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <form action="<?= site_url('about/proses') ?>" method="post">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Instagram</span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control" name="instagram" value="<?= $row->instagram ?>" placeholder="Nama instagram">
                                            <?= form_error('about', '<span class="text-danger small">', '</span>'); ?>
                                            <div class="form-control-position">
                                                <i class="feather icon-instagram"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Email</span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control" name="email" value="<?= $row->email ?>" placeholder="Alamat Email">
                                            <?= form_error('about', '<span class="text-danger small">', '</span>'); ?>
                                            <div class="form-control-position">
                                                <i class="feather icon-mail"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>No Telp</span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control" name="no_telp" value="<?= $row->telp ?>" placeholder="Nomor Telp">
                                            <?= form_error('about', '<span class="text-danger small">', '</span>'); ?>
                                            <div class="form-control-position">
                                                <i class="feather icon-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>About</span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="position-relative has-icon-left">
                                            <textarea name="about" id="editor1" class="form-control" cols="30" rows="10"><?= $this->input->post('description') ?? $row->description ?></textarea>
                                            <input type="hidden" name="id_about" class="form-control" value="<?= $row->id_about ?>">
                                            <?= form_error('about', '<span class="text-danger small">', '</span>'); ?>
                                            <div class="form-control-position">
                                                <i class="feather icon-mail"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary mr-1 mb-1">Simpan</button>
                            </div>
                        </div>
                    </div>
                    <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>