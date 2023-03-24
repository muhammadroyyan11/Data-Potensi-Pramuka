<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kartu extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Sosmed_model', 'sosmed');
    }

    public function index()
    {
        $sosmed = $this->base_model->get('sosmed')->result();

        $data = array(
            'title' => 'Data Sosial Media',
            'sosmed' => $sosmed
        );

        $this->template->load('template', 'kartu/master', $data);
    }

}
