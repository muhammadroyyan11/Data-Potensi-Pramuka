<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{

    public $data;

    public $from;

    public $to;

    public $wilayah;

    private $filtered = array();

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Kegiatan_model', 'kegiatan');
        $this->load->model('Laporan_model', 'laporan');
        $this->load->model('Base_model', 'base');
        // $this->from = (!$this->input->get_post('from')) ? '0000-00-00' : $this->input->get('from');
        // $this->to = (!$this->input->get('to')) ? date('Y-m-d') : $this->input->get('to');
        $this->wilayah = $this->input->get('wilayah');
    }

    public function index()
    {
        $laporan = $this->laporan->get()->result();
        $wilayah = $this->base->get('wilayah')->result();

        $data = array(
            'title' => 'Rekap kegiatan',
            'laporan' => $laporan,
            'wilayah' => $wilayah
        );

        $this->template->load('template', 'kegiatan/data', $data);
    }
}
