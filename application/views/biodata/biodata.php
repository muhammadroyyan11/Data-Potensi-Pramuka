<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-3 col-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4>Photo Profile</h4>
                        <hr>
                        <div class="col-md-42">
                            <img src="<?= base_url() ?>assets/app-assets/images/portrait/small/avatar-s-11.jpg" alt="" class="mb-2 rounded">
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary">Edit Photo</button>
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
                        <form class="form form-vertical" action="<?= site_url('biodata/proses') ?>" method="POST">
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