<section id="basic-input-groups">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Filter laporan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="">
                            <div class="row">
                                <div class="col-md-3 col-12 mb-1">
                                    <fieldset>
                                        <label>Dari tanggal : </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="date" class="form-control" name="from" placeholder="Addon to Left" aria-describedby="basic-addon1" value="<?php echo (!$this->input->get('from')) ? date('Y-m-d') : $this->input->get('from') ?>">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-3 col-12 mb-1">
                                    <fieldset>
                                        <label>Sampai Tanggal : </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="date" class="form-control" name="to" placeholder="Addon to Left" aria-describedby="basic-addon1" value="<?php echo (!$this->input->get('to')) ? date('Y-m-d') : $this->input->get('to') ?>">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-3 col-12 mb-1">
                                    <div class="form-group">
                                        <label>Wilayah : </label>
                                        <select class="form-control input-sm" name="wilayah">
                                            <option value="">~ PILIH ~</option>
                                            <?php foreach ($wilayah as $row) : ?>
                                                <option value="<?php echo $row->id_wilayah; ?>" <?php echo ($row->id_wilayah == $this->input->get('wilayah')) ? 'selected' : ''; ?>><?php echo $row->nama_wilayah; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-12 mb-1">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-primary">Filter kegiatan</button>
                                            <!-- <input type="text"> -->
                                        </div>
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


<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Kegiatan</th>
                                        <th>Deskripsi</th>
                                        <th>Lampiran File</th>
                                        <th>Tanggal</th>
                                        <th>Wilayah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($laporan as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data->judul_kegiatan ?></td>
                                            <td><?= $data->deskripsi ?></td>
                                            <td><a href="<?= base_url() ?>assets/uploads/laporan/<?= $data->lampiran ?>"><?= $data->lampiran ?></a></td>
                                            <td><?= $data->date ?></td>
                                            <td><?= $data->nama_wilayah ?></td>
                                            <td>
                                                <a href="<?= base_url('laporan/detail/') . $data->id_laporan ?>" class="btn btn-circle btn-sm btn-primary"><i class="fa fa-fw fa-info"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>