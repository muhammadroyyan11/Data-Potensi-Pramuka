<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataSaka extends CI_Controller
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
        $potensi = $this->anggota->getPotensiAnggota(userdata('id_user'))->result_array();
        $user = $this->anggota->getById(userdata('anggota_id'))->row();

        $arr = [];

        foreach ($potensi as $key => $data) {
            $arr[] = strtolower($data['nama_potensi']);
        }

        $data = array(
            'title' => 'Update Biodata',
            'potensi' => $arr,
            'row' => $user
        );
        $this->template->load('template', 'biodata/saka', $data);
    }

    public function savePotensi()
    {
        $post = $this->input->post(null, TRUE);

        $this->anggota->updateGudep($post);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil diubah.');
        }

        redirect('DataSaka');
    }
}
