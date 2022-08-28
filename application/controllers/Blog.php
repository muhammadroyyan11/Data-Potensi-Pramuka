<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      // $this->load->model('identity_model', 'identity', true);
      // $this->load->model('banner_model', 'banner', true);
      // $this->load->model('berita_model', 'posting', true);
      // $this->load->model('category_model', 'category', true);
      $this->load->model('Berita_model', 'berita');
      $this->load->model('Kategori_model', 'kategori');
   }

   public function index($page = null)
   {
      $data['title']       = 'Blog';
      $data['navbar']      = $this->kategori->get();
      $data['category']    = $this->kategori->get();
      $data['post']        = $this->berita->getAllPosting($page);
      $data['popular']     = $this->berita->getMostPopular();
      $data['trending']    = $this->berita->getThread();
      $data['category']    = $this->kategori->get();

      $data['total_rows']  = $this->berita->countPosting();
      $data['pagination']  = $this->berita->makePagination(
         base_url('blog'),
         2,
         $data['total_rows']
      );

      $data['page'] = 'blog';
      $this->load->view('front/layouts/app', $data);
   }

   public function category($category, $page = null)
   {
      $data['title']       = 'Blog';
      $data['category']    = $this->kategori->get();
      $data['post']        = $this->berita->getPostingByCategory($category, $page);
      $data['popular']     = $this->berita->getMostPopular();
      $data['trending']    = $this->berita->getThread();
      $data['category']    = $this->kategori->get();

      $data['total_rows']  = $this->berita->countPosting($category);
      $data['pagination']  = $this->berita->makePagination(
         base_url("blog/category/$category/"),
         4,
         $data['total_rows']
      );

      $data['page'] = 'blog';
      $this->load->view('front/layouts/app', $data);
   }

   public function read($seo_title)
   {
      $row = $this->berita->getberita($seo_title);

      if ($row) {
         $data['posting']     = $row;
         $data['title']       = $row->judul;
         // $data['favicon']     = $this->identity->getIdentity();
         // $data['banner']      = $this->banner->getBanner();
         $data['popular']     = $this->berita->getMostPopular();
         $data['trending']    = $this->berita->getThread();
         $data['category']    = $this->kategori->get();
         $data['page']        = 'news-detail';
         $this->load->view('front/layouts/app', $data);
      } else {
         redirect(base_url('home'));
      }
   }
}

/* End of file Blog.php */
