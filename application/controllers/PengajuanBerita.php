<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengajuanBerita extends CI_Controller
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
        $this->load->model('Berita_model', 'berita');
        // $this->from = (!$this->input->get_post('from')) ? '0000-00-00' : $this->input->get('from');
        // $this->to = (!$this->input->get('to')) ? date('Y-m-d') : $this->input->get('to');
        $this->wilayah = $this->input->get('wilayah');
    }

    public function index()
    {
        $get = $this->berita->get()->result();

        $data = array(
            'title' => 'Rekap kegiatan',
            'pengajuan' => $get
        );

        $this->template->load('template', 'pengajuan/data', $data);
    }


    public function pengajuan($id)
    {
        $get = $this->berita->get(['id_berita' => $id])->row();

        $data = array(
            'title' => 'Pengajuan',
            'row' => $get
        );

        $this->template->load('template', 'pengajuan/edit', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);

        $this->berita->editPengajuan($post);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil disimpan');
        }

        redirect('pengajuanBerita');
    }
}
