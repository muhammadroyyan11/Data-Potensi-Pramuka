<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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
        $this->load->model('Kegiatan_model', 'kegiatan');
        $this->load->model('Laporan_model', 'laporan');
        $this->load->model('Base_model', 'base');
        $this->load->model('Anggota_model', 'anggota');
        $this->wilayah = $this->input->get('wilayah');
    }

    public function index()
    {
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|trim');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');

        if ($this->form_validation->run() == false) {
            if (userdata('role') == 1) {
                $user = $this->base->getUserAdmin('user', ['id_user' => userdata('id_user')])->row();
            } else {
                $user = $this->anggota->getById(userdata('anggota_id'))->row();
            }

            $data = array(
                'title' => 'Profile',
                'row' => $user
            );

            $this->template->load('template', 'profil/update', $data);
        } else {
            $post = $this->input->post(null, TRUE);

            $this->base->changePassword($post);

            if ($this->db->affected_rows() > 0) {
                set_pesan('Password berhasil diganti');
            }

            redirect('Profile');
        }
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);

        $this->anggota->update($post);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil diubah.');
        }

        redirect('profile');
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|trim');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
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
                set_pesan('Berhasil mengganti foto');
            }
            // var_dump($post);
            redirect('profile');
        } else {
            // var_dump($post);
            set_pesan('Terjadi kesalahan saat mengupload data', false);
        }
    }
}
