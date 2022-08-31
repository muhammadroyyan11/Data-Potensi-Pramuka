<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Anggota Potensi</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Nama Sosial Media</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="username" class="form-control" name="username" placeholder="Masukkan username" value="<?= set_value('username'); ?>">
                                        <?= form_error('username', '<span class="text-danger small">', '</span>'); ?>
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>