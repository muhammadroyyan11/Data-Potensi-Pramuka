<div class="col-lg-4">
   <div class="right_sidebar">

      <aside class="r_widgets news_widgets">
         <div class="main_title2">
            <h2>Most Popular News</h2>
         </div>
         <div class="choice_item">
            <img class="img-fluid" src="<?= base_url() ?>assets/uploads/berita/<?= $popular->foto ?>" alt="">
            <div class="choice_text">
               <div class="date">
                  <a class="gad_btn" href="<?= base_url("blog/category/$popular->slug") ?>"><?= $popular->nama_kategori ?></a>
                  <a href="#" class="float-right"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($popular->date) ?></a>
               </div>
               <a href="<?= base_url("blog/read/$popular->seo_judul") ?>">
                  <h4><?= $popular->judul ?></h4>
               </a>
               <p><?= character_limiter($popular->isi, 150) ?></p>
            </div>
         </div>

         <div class="main_title2 mb-5">
            <h2>Trending Now</h2>
         </div>
         <div class="news_slider owl-carousel">
            <?php foreach ($trending as $t) : ?>
               <div class="item">
                  <div class="choice_item">
                     <img src="<?= base_url() ?>assets/uploads/berita/<?= $popular->foto ?>" alt="">
                     <div class="choice_text">
                        <a href="<?= base_url("blog/read/$t->seo_judul") ?>">
                           <h4><?= $t->judul ?></h4>
                        </a>
                        <div class="date">
                           <a href="<?= base_url("blog/read/$t->seo_judul") ?>"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($t->date) ?></a>
                        </div>
                     </div>
                  </div>
               </div>
            <?php endforeach ?>
         </div>
      </aside>

      <aside class="r_widgets social_widgets mt-5">
         <div class="main_title2">
            <h2>Social Networks</h2>
         </div>
         <ul class="list">
            <li><a href="#"><i class="fa fa-facebook"></i>kwarcabCilegon.com<span>Like our page</span></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i>kwarcabCilegon.com<span>Follow Us</span></a></li>
            <li><a href="#"><i class="fa fa-youtube-play"></i>kwarcabCilegon.com<span>Subscribe</span></a></li>
         </ul>
      </aside>

   </div>
</div>