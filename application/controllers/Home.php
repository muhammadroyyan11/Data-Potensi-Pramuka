<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      // $this->load->model('identity_model', 'identity', true);
      // $this->load->model('banner_model', 'banner', true);
      // $this->load->model('posting_model', 'posting', true);
      // $this->load->model('category_model', 'category', true);
      $this->load->model('Berita_model', 'berita');
      $this->load->model('Kategori_model', 'kategori');
   }

   public function index()
   {
      // $data['favicon']     = $this->identity->getIdentity();
      $data['title']       = 'Home';
      // $data['banner']      = $this->banner->getBanner();
      $data['featured']    = $this->berita->getFeatured();
      $data['choice']      = $this->berita->getChoice();
      $data['popular']     = $this->berita->getMostPopular();
      $data['trending']    = $this->berita->getThread();
      $data['lastNews']    = $this->berita->getLastNews();
      $data['sosmed']      = $this->base_model->get('sosmed')->result();
      // $data['video_game']  = $this->posting->getVideoGames();
      $data['category']    = $this->kategori->get();

      $data['page'] = 'home';

      // var_dump($data['featured']);
      $this->load->view('front/layouts/app', $data);
   }
}

/* End of file Home.php */
