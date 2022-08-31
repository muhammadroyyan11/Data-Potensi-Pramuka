<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('kategori_model', 'category', true);
   }

   public function index()
   {
      $data['title']       = 'Contact';
      $data['navbar']      = $this->category->get();
      $data['category']    = $this->category->get();
      $data['sosmed']      = $this->base_model->get('sosmed')->result();
      $data['page'] = 'contact';
      $this->load->view('front/layouts/app', $data);
   }
}

/* End of file Contact.php */
