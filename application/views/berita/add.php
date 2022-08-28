<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><?= $title ?></h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= form_open_multipart('berita/proses') ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Judul Berita</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="first-name" class="form-control" name="judul" placeholder="Judul Artikel">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Kategori Berita</span>
                                </div>
                                <div class="col-md-8">
                                    <select name="kategori" class="form-control">
                                        <option value="">-- Pilih Kategori --</option>
                                        <?php foreach ($kategori as $key => $data) { ?>
                                            <option value="<?= $data->id_kategori ?>"><?= $data->nama_kategori ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Penulis</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="first-name" class="form-control" name="penulis" value="<?= userdata('nama') ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Isi berita</span>
                                </div>
                                <div class="col-md-8">
                                    <textarea name="isi" id="editor1" cols="30" rows="10"></textarea>
                                    <?= form_error('konten', '<small class="form-text text-danger">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Foto Berita</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="lampiran" class="file">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 offset-md-9">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Ajukan</button>
                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script>
    var ckeditor = CKEDITOR.replace('ckeditor', {
        height: '600px'
    });

    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline('editable');
</script>
<script>
    $('#summernote').summernote({
        height: 300,
    });
</script>