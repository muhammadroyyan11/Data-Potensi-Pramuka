<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><?= $title ?></h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= form_open_multipart('pengajuanBerita/proses') ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Judul Berita</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="first-name" class="form-control" name="judul" value="<?= $row->judul ?>" placeholder="Judul Artikel">
                                    <input type="hidden" id="first-name" class="form-control" name="id_berita" value="<?= $row->id_berita ?>" placeholder="Judul Artikel">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Penulis</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="first-name" class="form-control" name="penulis" value="<?= $row->penulis ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Editor</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="first-name" class="form-control" name="editor">
                                    <small style="color: red;">Mohon isi editor berita</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Isi berita</span>
                                </div>
                                <div class="col-md-8">
                                    <textarea name="isi" id="editor1" cols="30" rows="10"><?= $this->input->post('isi') ?? $row->isi ?></textarea>
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
                                    <img src="<?= base_url() ?>assets/uploads/berita/<?= $row->foto ?>" alt="<?= $row->foto ?>" style="width: 200px">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Status pengajuan</span>
                                </div>
                                <div class="col-md-8">
                                    <select name="status" id="" class="form-control">
                                        <option value="0">-- Pilih Status --</option>
                                        <option value="1">Setujui</option>
                                        <option value="2">Tolak</option>
                                    </select>
                                    <small style="color: red;">Perhatikan status pengajuan berita</small>
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