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

        $this->template->load('template', 'biodata/biodata', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);

        // var_dump($post);

        $this->anggota->update($post);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil diubah.');
        }

        redirect('biodata');
    }

    public function prosesFoto()
    {
        $post = $this->input->post(null, TRUE);

        $config['upload_path']          = './assets/uploads/profil/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $config['file_name']            = userdata('nama') . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $post['foto'] = $this->upload->data('file_name');
            $this->anggota->foto($post);
            if ($this->db->affected_rows() > 0) {
                set_pesan('Data Berhasil Dismpan');
            }
            // var_dump($post);
            redirect('biodata');
        } else {
            // var_dump($post);
            set_pesan('Terjadi kesalahan saat mengupload data', false);
        }
    }
}
