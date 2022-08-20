<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        // // $this->load->model('Auth_model', 'auth');
        // $this->load->model('Admin_model', 'admin');
        $this->load->model('Kegiatan_model', 'kegiatan');
        $this->load->model('Laporan_model', 'laporan');
        $this->load->model('Base_model', 'base');
        $this->load->model('Berita_model', 'berita');
        // $this->from = (!$this->input->get_post('from')) ? '0000-00-00' : $this->input->get('from');
        // $this->to = (!$this->input->get('to')) ? date('Y-m-d') : $this->input->get('to');
        $this->wilayah = $this->input->get('wilayah');
    }

    public function index()
    {
        // var_dump(userdata('wilayah'));
        // $data['title'] = "Dashboard";
        $get = $this->berita->get()->result();
        $getLaporan = $this->laporan->get()->result();
        // $getLogin = $this->anggota->getPotensiAnggota(userdata('id_user'))->result();

        $data = array(
            'title' => 'Dashboard',
            'berita' => $get,
            'laporan' => $getLaporan
        );
        $this->template->load('template', 'dashboard/dashboard', $data);
    }
}
