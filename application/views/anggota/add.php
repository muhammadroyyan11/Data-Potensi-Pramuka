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
                                    <span>Username</span>
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
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Password</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                        <?= form_error('password', '<span class="text-danger small">', '</span>'); ?>
                                        <div class="form-control-position">
                                            <i class="feather icon-hash"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Konfirmasi Password</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="password" id="password2" name="password2" class="form-control" placeholder="Konfirmasi Password">
                                        <?= form_error('password2', '<span class="text-danger small">', '</span>'); ?>
                                        <div class="form-control-position">
                                            <i class="feather icon-hash"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Nama Lengkap</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan nama" value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
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
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Masukkan email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<span class="text-danger small">', '</span>'); ?>
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
                                    <span>No Tlp</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="no_telp" id="no_telp" class="form-control" name="no_telp" placeholder="Masukkan No Telp" value="<?= set_value('no_telp'); ?>">
                                        <?= form_error('no_telp', '<span class="text-danger small">', '</span>'); ?>
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
                                    <span>Wilayah</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <select name="kwarcab" id="" class="form-control">
                                            <?php if ($this->session->userdata('login_session')['role'] == 2) { ?>
                                                <option value="<?= $row->id_wilayah ?>"><?= $row->nama_wilayah ?></option>
                                                <?php } elseif ($this->session->userdata('login_session')['role'] == 1) {
                                                foreach ($wilayah as $key => $data) { ?>
                                                    <option value="<?= $data->id_wilayah ?>"><?= $data->nama_wilayah ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                        <div class="form-control-position">
                                            <i class="feather icon-map-pin"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (userdata('role') == 2) { ?>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Potensi</span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="position-relative has-icon-left">
                                            <select class="select2 form-control" name="potensi[]" multiple="multiple">
                                                <?php foreach ($potensi as $key => $data) { ?>
                                                    <option value="<?= $data->id_potensi ?>"><?= $data->nama_potensi ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>

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