<!-- content page -->

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center" style="background-image: url(<?= base_url('images/banner/') ?>)">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>About us</h2>
                <div class="page_link">
                    <a href="<?= base_url('home') ?>">Home</a>
                    <a href=<?= site_url('contact') ?>">About</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bgwhite p-t-66 p-b-60 mt-5">
    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-mobile"></i>
                                <p>
                                    No Telp: <br><?= $about->telp ?><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-instagram"></i>
                                <p>
                                    Instagram: <br><?= $about->instagram ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    Email: <br><?= $about->email ?><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Start Map -->
                        <p class="text-justify"><?= $about->description ?></p>
                        <!-- End Map -->
                    </div>

                    <!-- Start Google Map -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Start Map -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126968.60811563936!2d105.92164196249999!3d-6.026412399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418e700c41ff03%3A0x6d27e85972f1572f!2sGerakan%20Pramuka%20Kwartir%20Ranting%20Cilegon!5e0!3m2!1sid!2sid!4v1661966357084!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- End Map -->
                    </div>
                    <!-- End Google Map -->
                </div>
            </div>
        </div>
    </div><!-- End Contact Section -->
</section>