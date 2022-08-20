<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-5 col-12 mb-3">
            ini gambar
        </div>
        <div class="col-md-7 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical">
                            <div class="form-body">
                                <div class="row">
                                    <?php
                                    foreach ($potensi as $key => $data) {
                                        if ($data->nama_potensi == 'Gudep') { ?>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">First Name</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="First Name">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } elseif ($data->nama_potensi == 'Saka') { ?>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-icon">Email</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="email" id="email-id-icon" class="form-control" name="email-id-icon" placeholder="Email">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-mail"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php }
                                    }
                                    ?>


                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-icon">Mobile</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="number" id="contact-info-icon" class="form-control" name="contact-icon" placeholder="Mobile">
                                                <div class="form-control-position">
                                                    <i class="feather icon-smartphone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Password</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="password" id="password-icon" class="form-control" name="contact-icon" placeholder="Password">
                                                <div class="form-control-position">
                                                    <i class="feather icon-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <fieldset class="checkbox">
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                                <span class="">Remember me</span>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
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
<!-- // Basic Vertical form layout section end -->