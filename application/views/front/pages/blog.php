<?php
$url = $this->uri->segment(3);

if (isset($url)) {
   $query = $this->db->where('slug', $url)->get('kategori')->row();
   $title = "About " . $query->nama_kategori;
} else {
   $title = '';
}
?>

<!--================News Area =================-->
<section class="news_area p_100">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="main_title2">
               <h2>All News <?= $title ?></h2>
            </div>
            <div class="latest_news">
               <?php foreach ($post as $p) : ?>
                  <div class="media">
                     <div class="d-flex">
                        <img class="img-fluid" src="<?= base_url() ?>assets/uploads/berita/<?= $p->foto ?>" alt="">
                     </div>
                     <div class="media-body">
                        <div class="choice_text">
                           <div class="date">
                              <a class="gad_btn" href="<?= base_url("blog/read/$p->seo_judul") ?>"><?= $p->nama_kategori ?></a>
                              <a href="<?= base_url("blog/read/$p->seo_judul") ?>" class="float-right"><i class="fa fa-calendar" aria-hidden="true">
                                 </i><?= mediumdate_indo($p->date) ?>
                              </a>
                           </div>
                           <a href="<?= base_url("blog/read/$p->seo_judul") ?>">
                              <h4><?= $p->judul ?></h4>
                           </a>
                           <p><?= character_limiter($p->isi, 100) ?></p>
                        </div>
                     </div>
                  </div>
               <?php endforeach ?>
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
               <div class="col">
                  <nav aria-label="Page navigation example">
                     <?= $pagination ?>
                  </nav>
               </div>
            </div>
            <!-- End of Pagination -->

         </div>
         <!-- ================Sidebar================== -->
         <?php $this->load->view('front/layouts/_sidebar', $trending) ?>
         <!-- ================End of Sidebar================== -->
      </div>
   </div>
</section>
<!--================End News Area =================-->