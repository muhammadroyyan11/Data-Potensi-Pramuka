<!-- Basic Vertical form layout section start -->
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
                    <h4 class="card-title">Biodata</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?= $this->session->flashdata('pesan'); ?>
                        <form class="form form-vertical" action="<?= site_url('Biodata/proses') ?>" method="POST">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-icon">Nama</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="first-name-icon" class="form-control" name="nama_anggota" value="<?= $row->nama_anggota ?>" placeholder="First Name">
                                                <input type="hidden" id="first-name-icon" class="form-control" name="id_user" value="<?= $row->id_user ?>" placeholder="First Name">
                                                <input type="hidden" id="first-name-icon" class="form-control" name="id_anggota" value="<?= $row->id_anggota ?>" placeholder="First Name">
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Tempat Lahir (Kota)</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="password-icon" class="form-control" name="tempat_lahir" value="<?= (set_value('tempat_lahir')) ? set_value('tempat_lahir') : $row->tempat_lahir ?>" placeholder="Tempat Lahir">
                                                <div class="form-control-position">
                                                    <i class="feather icon-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Tanggal Lahir</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="date" id="password-icon" class="form-control" name="tanggal_lahir" value="<?= (set_value('tanggal_lahir')) ? set_value('tanggal_lahir') : $row->tanggal_lahir ?>">
                                                <div class="form-control-position">
                                                    <i class="feather icon-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Jenis Kelamin</label>
                                            <div class="position-relative has-icon-left">
                                                <select name="jenis_kelamin" id="" class="form-control">
                                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                                    <option value="Putra" <?= $row->jenis_kelamin == 'Putra' ? 'selected' : '' ?>>Putra</option>
                                                    <option value="Putri" <?= $row->jenis_kelamin == 'Putri' ? 'selected' : '' ?>>Putri</option>
                                                </select>
                                                <div class="form-control-position">
                                                    <i class="feather icon-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email-id-icon">Email</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="email" id="email-id-icon" class="form-control" name="email" value="<?= (set_value('email')) ? set_value('email') : $row->email ?>" placeholder="Email">
                                                <div class="form-control-position">
                                                    <i class="feather icon-mail"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-icon">Mobile</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="number" id="contact-info-icon" class="form-control" name="no_hp" value="<?= (set_value('no_telp')) ? set_value('no_telp') : $row->no_telp ?>">
                                                <div class="form-control-position">
                                                    <i class="feather icon-smartphone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Wilayah</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="password-icon" class="form-control" name="wilayah" placeholder="<?= (set_value('wilayah')) ? set_value('wilayah') : $row->nama_wilayah ?>" readonly>
                                                <div class="form-control-position">
                                                    <i class="feather icon-lock"></i>
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
                <?php echo form_open_multipart('biodata/prosesFoto'); ?>
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