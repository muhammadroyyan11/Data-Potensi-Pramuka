<nav class="navbar navbar-light navbar-expand-lg navbar-light bg-light fixed-top home">
   <div class="container">
      <a class="d-flex w-50" href="<?= site_url('home') ?>">
         <img src="<?= base_url() ?>assets/images/logo.png" width="200" class="d-inline-block align-top" height="60" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
         <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url('home') ?>">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url('blog') ?>">Berita</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kategori
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <?php
                  foreach ($category as $key => $data) { ?>
                     <a class="dropdown-item" href="<?= site_url("blog/category/$data->slug") ?>"><?= $data->nama_kategori ?></a>
                  <?php } ?>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">About</a>
            </li>
         </ul>
         <div class="custom-control custom-switch mr-5">
         </div>
         <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <?php
            foreach ($sosmed as $key => $data) { ?>
               <li class="nav-item">
                  <a class="nav-link" href="<?= $data->link ?>" target="_blank">
                     <i class="fa <?= $data->icon ?>"></i>
                  </a>
               </li>
            <?php }
            ?>
         </ul>
      </div>
   </div>
</nav>