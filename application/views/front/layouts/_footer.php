<!--================ start footer Area  =================-->
<footer class="footer-area mt-5">
   <div class="container">
      <div class="row f_widgets_inner">
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget ab_widgets">
               <div class="f_title">
                  <h3>Kwarcab Cilegon</h3>
               </div>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est in deleniti assumenda praesentium, velit aspernatur nulla aperiam molestiae enim quo ipsam eligendi corrupti dolorem quos nostrum! Id rerum distinctio consequatur quae, illo placeat sunt sit molestiae, in, accusamus accusantium eveniet!</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
               <div class="f_title">
                  <h3>Quick Links</h3>
               </div>
               <div class="row">
                  <div class="col-6">
                     <h5 style="color: white">Kategori</h5>
                     <ul class="list mt-3">
                        <?php foreach ($category as $c) : ?>
                           <li><a href="<?= site_url("blog/category/$c->slug") ?>"><?= $c->nama_kategori ?></a></li>
                        <?php endforeach ?>
                     </ul>
                  </div>
                  <div class="col-6">
                     <h5 style="color: white">Info</h5>
                     <ul class="list">
                        <li><a href="<?= site_url('blog') ?>">Berita</a></li>
                        <li><a href="<?= site_url('contact') ?>">About</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-footer-widget m_news_widgets">
               <div class="f_title">
                  <h3>Social Networks</h3>
               </div>
               <div class="col-lg-4 col-md-4 footer-social icon mx-auto">
                  <?php foreach ($sosmed as $key => $data) { ?>
                     <a href="<?= $data->link ?>" target="_blank"><i class="fa <?= $data->icon ?>"></i></a>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
      <div class="row footer-bottom d-flex justify-content-between align-items-center">
         <div class="col-lg-12">
            <div class="f_boder"></div>
         </div>
         <p class="col-lg-8 col-md-8 footer-text">
            Copyright &copy;<script>
               document.write(new Date().getFullYear());
            </script> All rights reserved by <a href="<?= site_url('auth') ?>" target="_blank">Kwatir Cabang Kota Cilegon</a>
         </p>
      </div>
   </div>
</footer>
<!--================ End footer Area  =================-->