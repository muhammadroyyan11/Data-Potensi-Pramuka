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
                    <h4 class="card-title">Data Potensi Kwaran</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?= $this->session->flashdata('pesan'); ?>
                        <form class="form form-vertical" action="<?= site_url('biodata/proses') ?>" method="POST">
                            <div class="form-body">
                                <div class="row">

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nama Lengkap</label>
                                            <input type="text" id="first-name-vertical" class="form-control" name="nama_anggota" value="<?= (set_value('nama_anggota')) ? set_value('nama_anggota') : $row->nama_anggota ?>" readonly>
                                        </div>
                                    </div>
                                    <?php
                                    if (in_array("gudep", $potensi)) { ?>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-icon">Nomor SK</label>
                                                <input type="text" id="email-id-icon" class="form-control" name="no_sk" value="<?= (set_value('no_sk')) ? set_value('no_sk') : $row->no_sk ?>" placeholder="Nomor Gudep">
                                            </div>
                                        </div>
                                    <?php }
                                    ?>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-icon">Pangkalan</label>
                                            <input type="text" id="contact-info-icon" class="form-control" name="pangkalan" value="<?= (set_value('pangkalan')) ? set_value('pangkalan') : $row->pangkalan ?>" placeholder="Pangkalan">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Kwatir Rating</label>
                                            <input type="text" id="password-icon" class="form-control" name="wilayah" placeholder="<?= (set_value('wilayah')) ? set_value('wilayah') : $row->nama_wilayah ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Wilayah</label>
                                            <input type="text" id="password-icon" class="form-control" name="wilayah" placeholder="<?= (set_value('wilayah')) ? set_value('wilayah') : $row->nama_wilayah ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Tempat Lahir (Kota)</label>
                                            <input type="text" id="password-icon" class="form-control" name="tempat_lahir" value="<?= (set_value('tempat_lahir')) ? set_value('tempat_lahir') : $row->tempat_lahir ?>" placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Tanggal Lahir</label>
                                            <input type="date" id="password-icon" class="form-control" name="tanggal_lahir" value="<?= (set_value('tanggal_lahir')) ? set_value('tanggal_lahir') : $row->tanggal_lahir ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="" class="form-control">
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="putra">Putra</option>
                                                <option value="putri">Putri</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Golongan</label>
                                            <select name="golongan" id="" class="form-control">
                                                <option value="">-- Pilih Golongan --</option>
                                                <option value="Siaga">S (Siaga)</option>
                                                <option value="Penggalang">G (Penggalang)</option>
                                                <option value="Penegak">T (Penegak)</option>
                                                <option value="d">T (Penegak)</option>
                                                <option value="b">B (Pembina)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <?php if (in_array("gudep", $potensi)) { ?>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password-icon">Tingkatan Gudep</label>
                                                <select name="tingkatan_gudep" id="" class="form-control">
                                                    <option value="">-- Pilih Tingkatan --</option>
                                                    <optgroup label="Siaga">
                                                        <option value="Siaga Mula">Siaga Mula</option>
                                                        <option value="Siaga Bantu">Siaga Bantu</option>
                                                        <option value="Siaga Tata">Siaga Tata</option>
                                                    </optgroup>
                                                    <optgroup label="Penggalang">
                                                        <option value="Penggalang Ramu">Penggalang Ramu</option>
                                                        <option value="Penggalang Rakit">Penggalang Rakit</option>
                                                        <option value="Penggalang Terap">Penggalang Terap</option>
                                                    </optgroup>
                                                    <optgroup label="Penegak">
                                                        <option value="Penegak Bantara">Penegak Bantara</option>
                                                        <option value="Penegak Laksana">Penegak Laksana</option>
                                                    </optgroup>
                                                    <optgroup Label="Pandega">
                                                        <option value="Penegak Pandega">Penegak Pandega</option>
                                                    </optgroup>
                                                    <optgroup label="Pembina">
                                                        <option value="Pembina KMD">Pembina KMD</option>
                                                        <option value="Pembina KML">Pembina KML</option>
                                                        <option value="Pembina KPD">Pembina KPD</option>
                                                        <option value="Pembina KPL">Pembina KPL</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if (in_array("saka", $potensi)) { ?>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password-icon">Tingkatan Saka</label>
                                                <select name="tingkatan_saka" id="" class="form-control">
                                                    <option value="">-- Pilih Tingkatan --</option>
                                                    <optgroup label="Penggalang">
                                                        <option value="Terap">Terap</option>
                                                    </optgroup>
                                                    <optgroup label="Penggalang">
                                                        <option value="Penggalang Ramu">Penggalang Ramu</option>
                                                        <option value="Penggalang Rakit">Penggalang Rakit</option>
                                                        <option value="Penggalang Terap">Penggalang Terap</option>
                                                    </optgroup>
                                                    <optgroup label="Penegak">
                                                        <option value="Penegak Bantara">Penegak Bantara</option>
                                                        <option value="Penegak Laksana">Penegak Laksana</option>
                                                    </optgroup>
                                                    <optgroup Label="Pandega">
                                                        <option value="Penegak Pandega">Penegak Pandega</option>
                                                    </optgroup>
                                                    <optgroup label="Pembina">
                                                        <option value="Pembina KMD">Pembina KMD</option>
                                                        <option value="Pembina KML">Pembina KML</option>
                                                        <option value="Pembina KPD">Pembina KPD</option>
                                                        <option value="Pembina KPL">Pembina KPL</option>
                                                    </optgroup>
                                                    <optgroup Label="Jabatan">
                                                        <option value="Dewan Saka">Dewan Saka</option>
                                                        <option value="Pimpinan SAKA">Pimpinan SAKA</option>
                                                        <option value="Pamong SAKA">Pamong SAKA</option>
                                                        <option value="Instruktur SAKA">Instruktur SAKA</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Penghargaan</label>
                                            <select name="penghargaan" id="" class="form-control">
                                                <option value="">-- Pilih Penghargaan --</option>
                                                <option value="garuda">Garuda</option>
                                                <option value="teladan">Teladan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Kursus pembina</label>
                                            <select name="kursus" id="" class="form-control">
                                                <option value="">-- Pilih Penghargaan --</option>
                                                <option value="Belum Kursus">Belum Kursus</option>
                                                <option value="Kursus Mahir Dasar">Kursus Mahir Dasar</option>
                                                <option value="Kursus Mahir Lanjutan">Kursus Mahir Lanjutan</option>
                                                <option value="Kursus Pelatih Dasar">Kursus Pelatih Dasar</option>
                                                <option value="Kursus Pelatih Lanjutan">Kursus Pelatih Lanjutan</option>
                                            </select>
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