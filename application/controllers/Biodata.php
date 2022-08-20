<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Kegiatan_model', 'kegiatan');
        $this->load->model('Laporan_model', 'laporan');
        $this->load->model('Base_model', 'base');
        $this->load->model('Anggota_model', 'anggota');
        $this->wilayah = $this->input->get('wilayah');
    }

    public function index()
    {
        $potensi = $this->anggota->getPotensiAnggota(userdata('id_user'))->result();

        // var_dump($arr1, $arr2);

        $data = array(
            'title' => 'Update Biodata',
            'potensi' => $potensi
        );
        $this->template->load('template', 'biodata/biodata', $data);
    }
}
