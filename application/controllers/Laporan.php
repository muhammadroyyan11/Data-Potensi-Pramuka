<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
        $this->load->model('Laporan_model', 'laporan');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        $where = array('user_id' => userdata('id_user'));
        $laporan = $this->laporan->get($where)->result();

        $data = array(
            'title' => 'Data Laporan',
            'laporan' => $laporan
        );

        $this->template->load('template', 'laporan/data', $data);
    }

    public function detail($id)
    {
        $where = array('id_laporan' => $id);
        $get = $this->laporan->get($where)->row();
        $data = array(
            'title' => 'Detail Lampiran',
            'row' => $get
        );

        $this->template->load('template', 'laporan/detail', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);

        // var_dump($post);

        $config['upload_path']          = './assets/uploads/laporan/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $config['file_name']            = slugify($post['judul_kegiatan']) . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('lampiran')) {
            $post['lampiran'] = $this->upload->data('file_name');
            $this->laporan->add($post);
            if ($this->db->affected_rows() > 0) {
                set_pesan('Data Berhasil Dismpan');
            }
            // var_dump($post);
            redirect('laporan');
        } else {
            var_dump($post);
            set_pesan('Terjadi kesalahan saat mengupload data', false);
        }
    }
}
