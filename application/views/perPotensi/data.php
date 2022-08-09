<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><?= $title ?></h4>
                    
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                    <?= $this->session->flashdata('pesan'); ?>
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>No. telp</th>
                                        <th>Potensi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($users as $key => $data) { ?>
                                        <tr>

                                            <td><?= $no++; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['username']; ?></td>
                                            <td><?= $data['email']; ?></td>
                                            <td><?= $data['no_telp']; ?></td>
                                            <td><?= $data['nama_potensi']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>