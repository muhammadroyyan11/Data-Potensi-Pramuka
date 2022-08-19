<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Berita_model', 'berita');
    }

    public function index()
    {
        $berita = $this->berita->get()->result();
        $data = array(
            'title' => 'Data Berita',
            'berita' => $berita
        );
        $this->template->load('template', 'berita/data', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Upload Data Berita',
        );
        $this->template->load('template', 'berita/add', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);

        $config['upload_path']          = './assets/uploads/berita/';
        $config['allowed_types']        = 'jpeg|jpg|png|gif';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $config['file_name']            = $post['judul'] . '-'  . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('lampiran')) {
            $post['lampiran'] = $this->upload->data('file_name');
            $this->berita->add($post);
            if ($this->db->affected_rows() > 0) {
                set_pesan('Data berhasil diajukan');
            }
            redirect('berita');
        } else {
            $post['lampiran'] = 'default.jpg';
            $this->berita->add($post);
            if ($this->db->affected_rows() > 0) {
                set_pesan('Data berhasil diajukan');
            }
            // var_dump($post);
            redirect('berita');
        }
    }
}
