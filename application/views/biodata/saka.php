<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Potensi Kwaran</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?= $this->session->flashdata('pesan'); ?>
                        <form class="form form-vertical" action="<?= site_url('DataSaka/savePotensi') ?>" method="POST">
                            <div class="form-body">
                                <div class="row">

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nama Lengkap</label>
                                            <input type="text" id="first-name-vertical" class="form-control" name="nama_anggota" value="<?= (set_value('nama_anggota')) ? set_value('nama_anggota') : $row->nama_anggota ?>" readonly>
                                            <input type="hidden" id="first-name-vertical" class="form-control" name="id_anggota" value="<?= $row->id_anggota ?>" readonly>
                                        </div>
                                    </div>
                                    <?php
                                    if (in_array("saka", $potensi)) { ?>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-icon">Nomor SK</label>
                                                <input type="text" id="email-id-icon" class="form-control" name="no_sk" value="<?= (set_value('no_sk')) ? set_value('no_sk') : $row->no_sk ?>" placeholder="Nomor SK">
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email-id-icon">Nomor Gudep</label>
                                            <input type="text" id="email-id-icon" class="form-control" name="no_gudep" value="<?= (set_value('no_gudep')) ? set_value('no_gudep') : $row->no_gudep ?>" placeholder="Nomor Gudep">
                                        </div>
                                    </div>
                                    <?php
                                    if (in_array("saka", $potensi)) { ?>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password-icon">Jabatan</label>
                                                <select name="jabatan" id="" class="form-control">
                                                    <option value="">-- Pilih Jabatan --</option>
                                                    <option value="Dewan Saka" <?= $row->jabatan == 'Dewan Saka' ? 'selected' : '' ?>>Dewan Saka</option>
                                                    <option value="Pimpinan SAKA" <?= $row->jabatan == 'Pimpinan SAKA' ? 'selected' : '' ?>>Pimpinan SAKA</option>
                                                    <option value="Pamong SAKA" <?= $row->jabatan == 'Pamong SAKA' ? 'selected' : '' ?>>Pamong SAKA</option>
                                                    <option value="Instruktur SAKA" <?= $row->jabatan == 'Instruktur SAKA' ? 'selected' : '' ?>>Instruktur SAKA</option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } ?>
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
                                            <label for="password-icon">Golongan</label>
                                            <select name="golongan" id="" class="form-control">
                                                <option value="">-- Pilih Golongan --</option>
                                                <?php if (in_array("gudep", $potensi)) { ?>
                                                    <option value="Siaga" <?= $row->golongan == 'Siaga' ? 'selected' : '' ?>>S (Siaga)</option>

                                                <?php } ?>
                                                <option value="Penggalang" <?= $row->golongan == 'Penggalang' ? 'selected' : '' ?>>G (Penggalang)</option>
                                                <option value="Penegak" <?= $row->golongan == 'Penegak' ? 'selected' : '' ?>>T (Penegak)</option>
                                                <option value="Pandega" <?= $row->golongan == 'Pandega' ? 'selected' : '' ?>>D (Pandega)</option>
                                                <option value="Pembina" <?= $row->golongan == 'Pembina' ? 'selected' : '' ?>>B (Pembina)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <?php if (in_array("saka", $potensi)) { ?>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password-icon">Tingkatan Saka</label>
                                                <select name="tingkatan_saka" id="" class="form-control">
                                                    <option value="">-- Pilih Tingkatan --</option>
                                                    <optgroup label="Penggalang">
                                                        <option value="Terap" <?= $row->tingkatan_saka == 'Terap' ? 'selected' : '' ?>>Terap</option>
                                                    </optgroup>
                                                    <optgroup label="Penegak">
                                                        <option value="Penegak Bantara" <?= $row->tingkatan_saka == 'Penegak Bantara' ? 'selected' : '' ?>>Penegak Bantara</option>
                                                        <option value="Penegak Laksana" <?= $row->tingkatan_saka == 'Penegak Laksana' ? 'selected' : '' ?>>Penegak Laksana</option>
                                                    </optgroup>
                                                    <optgroup Label="Pandega">
                                                        <option value="Pandega" <?= $row->tingkatan_saka == 'Pandega' ? 'selected' : '' ?>>Pandega</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } ?>
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