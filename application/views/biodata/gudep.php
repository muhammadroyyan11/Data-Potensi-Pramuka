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
                        <form class="form form-vertical" action="<?= site_url('potensi/savePotensi') ?>" method="POST">
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
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email-id-icon">Nomor Gudep</label>
                                            <input type="text" id="email-id-icon" class="form-control" name="no_gudep" value="<?= (set_value('no_gudep')) ? set_value('no_gudep') : $row->no_gudep ?>" placeholder="Nomor Gudep">
                                        </div>
                                    </div>

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
                                                <option value="Siaga" <?= $row->golongan == 'Siaga' ? 'selected' : '' ?>>S (Siaga)</option>
                                                <option value="Penggalang" <?= $row->golongan == 'Penggalang' ? 'selected' : '' ?>>G (Penggalang)</option>
                                                <option value="Penegak" <?= $row->golongan == 'Penegak' ? 'selected' : '' ?>>T (Penegak)</option>
                                                <option value="Pandega" <?= $row->golongan == 'Pandega' ? 'selected' : '' ?>>D (Pandega)</option>
                                                <option value="Pembina" <?= $row->golongan == 'Pembina' ? 'selected' : '' ?>>B (Pembina)</option>
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
                                                        <option value="Siaga Mula" <?= $row->tingkatan_gudep == 'Siaga Mula' ? 'selected' : '' ?>>Siaga Mula</option>
                                                        <option value="Siaga Bantu" <?= $row->tingkatan_gudep == 'Siaga Bantu' ? 'selected' : '' ?>>Siaga Bantu</option>
                                                        <option value="Siaga Tata" <?= $row->tingkatan_gudep == 'Siaga Tata' ? 'selected' : '' ?>>Siaga Tata</option>
                                                    </optgroup>
                                                    <optgroup label="Penggalang">
                                                        <option value="Penggalang Ramu" <?= $row->tingkatan_gudep == 'Penggalang Ramu' ? 'selected' : '' ?>>Penggalang Ramu</option>
                                                        <option value="Penggalang Rakit" <?= $row->tingkatan_gudep == 'Penggalang Rakit' ? 'selected' : '' ?>>Penggalang Rakit</option>
                                                        <option value="Penggalang Terap" <?= $row->tingkatan_gudep == 'Penggalang Terap' ? 'selected' : '' ?>>Penggalang Terap</option>
                                                    </optgroup>
                                                    <optgroup label="Penegak">
                                                        <option value="Penegak Bantara" <?= $row->tingkatan_gudep == 'Penegak Bantara' ? 'selected' : '' ?>>Penegak Bantara</option>
                                                        <option value="Penegak Laksana" <?= $row->tingkatan_gudep == 'Penegak Laksana' ? 'selected' : '' ?>>Penegak Laksana</option>
                                                    </optgroup>
                                                    <optgroup Label="Pandega">
                                                        <option value="Pandega" <?= $row->tingkatan_gudep == 'Pandega' ? 'selected' : '' ?>>Pandega</option>
                                                    </optgroup>
                                                    <optgroup label="Pembina">
                                                        <option value="Pembina KMD" <?= $row->tingkatan_gudep == 'Pembina KMD' ? 'selected' : '' ?>>Pembina KMD</option>
                                                        <option value="Pembina KML" <?= $row->tingkatan_gudep == 'Pembina KML' ? 'selected' : '' ?>>Pembina KML</option>
                                                        <option value="Pembina KPD" <?= $row->tingkatan_gudep == 'Pembina KPD' ? 'selected' : '' ?>>Pembina KPD</option>
                                                        <option value="Pembina KPL" <?= $row->tingkatan_gudep == 'Pembina KPL' ? 'selected' : '' ?>>Pembina KPL</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if (in_array("gudep", $potensi)) { ?>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password-icon">Penghargaan</label>
                                                <select name="penghargaan" id="" class="form-control">
                                                    <option value="">-- Pilih Penghargaan --</option>
                                                    <option value="Garuda" <?= $row->penghargaan == 'Garuda' ? 'selected' : '' ?>>Garuda</option>
                                                    <option value="Teladan" <?= $row->penghargaan == 'Teladan' ? 'selected' : '' ?>>Teladan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password-icon">Kursus pembina</label>
                                                <select name="kursus" id="" class="form-control">
                                                    <option value="">-- Pilih Kursus --</option>
                                                    <option value="Belum Kursus" <?= $row->kursus_pembina == 'Belum Kursus' ? 'selected' : '' ?>>Belum Kursus</option>
                                                    <option value="Kursus Mahir Dasar" <?= $row->kursus_pembina == 'Kursus Mahir Dasar' ? 'selected' : '' ?>>Kursus Mahir Dasar</option>
                                                    <option value="Kursus Mahir Lanjutan" <?= $row->kursus_pembina == 'Kursus Mahir Lanjutan' ? 'selected' : '' ?>>Kursus Mahir Lanjutan</option>
                                                    <option value="Kursus Pelatih Dasar" <?= $row->kursus_pembina == 'Kursus Pelatih Dasar' ? 'selected' : '' ?>>Kursus Pelatih Dasar</option>
                                                    <option value="Kursus Pelatih Lanjutan" <?= $row->kursus_pembina == 'Kursus Pelatih Lanjutan' ? 'selected' : '' ?>>Kursus Pelatih Lanjutan</option>
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