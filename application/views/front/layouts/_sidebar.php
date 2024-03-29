<div class="col-lg-4">
   <div class="right_sidebar">

      <aside class="r_widgets news_widgets">
         <div class="main_title2">
            <h2>Most Popular News</h2>
         </div>
         <?php foreach ($popular as $key => $data) { ?>
            <div class="choice_item">
               <img class="img-fluid" src="<?= base_url("assets/uploads/berita/$data->foto") ?>" alt="">
               <div class="choice_text">
                  <div class="date">
                     <a class="gad_btn" href="<?= base_url("blog/category/$data->slug") ?>"><?= $data->nama_kategori ?></a>
                     <a href="#" class="float-right"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($data->date) ?></a>
                  </div>
                  <a href="<?= base_url("blog/read/$data->seo_judul") ?>">
                     <h4><?= $data->judul ?></h4>
                  </a>
                  <p><?= character_limiter($data->isi, 150) ?></p>
               </div>
            </div>
         <?php } ?>

         <div class="main_title2 mb-5">
            <h2>Trending Now</h2>
         </div>
         <div class="news_slider owl-carousel">
            <?php foreach ($trending as $t) : ?>
               <div class="item">
                  <div class="choice_item">
                     <img src="<?= base_url() ?>assets/uploads/berita/<?= $t->foto ?>" alt="">
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
            <?php foreach ($sosmed as $key => $data) { ?>
               <li><a href="<?= $data->link ?>" target="_blank"><i class="fa <?= $data->icon ?>"></i><?= $data->nama_sosmed ?><span></span></a></li>
            <?php } ?>
         </ul>
      </aside>

   </div>
</div>