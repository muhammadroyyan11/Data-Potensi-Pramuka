<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      date_default_timezone_set('Asia/Jakarta');
      $this->load->model('kategori_model', 'category', true);
      $this->load->model('Base_model', 'base', true);
   }

   public function index()
   {
      $data['title']       = 'Contact';
      $data['navbar']      = $this->category->get();
      $data['category']    = $this->category->get();
      $data['about']       = $this->base->get('about')->row();
      $data['sosmed']      = $this->base_model->get('sosmed')->result();
      $data['page'] = 'contact';
      $this->load->view('front/layouts/app', $data);
   }
}

/* End of file Contact.php */
