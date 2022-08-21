<!-- Basic Vertical form layout section start -->
<?= $this->session->flashdata('pesan'); ?>
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-3 col-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4>Foto Profil</h4>
                        <hr>
                        <div class="col-md-42">
                            <img src="<?= base_url() ?>assets/uploads/profil/<?= $row->foto ?>" alt="" class="mb-2 rounded" style="width: 200px; height: auto;">
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#large">
                                Ganti Foto
                            </button>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Informasi Login</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

                        <form class="form form-vertical" action="<?= site_url('profile/proses') ?>" method="POST">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-icon">Nama</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="first-name-icon" class="form-control" name="nama_anggota" value="<?= $row->nama ?>" placeholder="First Name">
                                                <input type="hidden" id="first-name-icon" class="form-control" name="id_user" value="<?= $row->id_user ?>" placeholder="First Name">
                                                <?php if (userdata('role') == 2 || userdata('role') == 3) { ?>
                                                    <input type="hidden" id="first-name-icon" class="form-control" name="id_anggota" value="<?= $row->id_anggota ?>" placeholder="First Name">
                                                <?php } ?>
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Username</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="password-icon" class="form-control" name="tempat_lahir" value="<?= (set_value('tempat_lahir')) ? set_value('tempat_lahir') : $row->username ?>" placeholder="Tempat Lahir">
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Perbarui</button>
                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ganti Password</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?= form_open(); ?>
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-icon">Password</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                            <?= form_error('password', '<span class="text-danger small">', '</span>'); ?>
                                            <div class="form-control-position">
                                                <i class="feather icon-hash"></i>
                                            </div>
                                            <input type="hidden" id="first-name-icon" class="form-control" name="id_user" value="<?= $row->id_user ?>" placeholder="First Name">
                                            <?php if (userdata('role') == 2 || userdata('role') == 3) { ?>
                                                <input type="hidden" id="first-name-icon" class="form-control" name="id_anggota" value="<?= $row->id_anggota ?>" placeholder="First Name">
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-icon">Konfirmasi Password</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="password" id="password2" name="password2" class="form-control" placeholder="Konfirmasi Password">
                                            <?= form_error('password2', '<span class="text-danger small">', '</span>'); ?>
                                            <div class="form-control-position">
                                                <i class="feather icon-hash"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Perbarui</button>
                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                        <?= form_close(); ?>
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
                <h4 class="modal-title" id="myModalLabel17">Upload Foto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('profile/prosesFoto'); ?>
                <div class="modal-body">
                    <input type="hidden" name="id_user" value="<?= $row->id_user ?>">
                    <label>Upload Foto Baru: </label>
                    <div class="form-group">
                        <input type="file" name="foto" placeholder="Foto Baru" class="form-control">
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