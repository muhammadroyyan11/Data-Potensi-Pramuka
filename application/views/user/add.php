<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data User</h4>
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
                                        <select name="wilayah" id="" class="form-control">
                                            <option value="null" readonly>-- Silahkan Pilih --</option>
                                            <?php foreach ($wilayah as $key => $data) { ?>
                                                <option value="<?= $data->id_wilayah ?>"><?= $data->nama_wilayah ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="form-control-position">
                                            <i class="feather icon-map-pin"></i>
                                        </div>
                                    </div>
                                    <small style="color: red;">Kosongkan jika bukan admin wilayah</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Role</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <select name="role" id="" class="form-control">
                                            <option value="" readonly>-- Silahkan Pilih --</option>
                                            <option value="1">Super Admin</option>
                                            <option value="2">Admin Wilayah</option>
                                        </select>
                                        <div class="form-control-position">
                                            <i class="feather icon-users"></i>
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