<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Anggota_model', 'anggota');
        $this->load->model('base_model', 'base');
    }

    public function index()
    {
        $data['title'] = "Data Anggota";
        $data['users'] = $this->base_model->getWhere()->result_array();
        $data['wilayah'] = $this->base_model->get('wilayah');
        // var_dump(userdata('wilayah'));
        $this->template->load('template', 'anggota/data', $data);
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]|alpha_numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|trim');
            $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
        } else {
            $db = $this->base_model->get('user', ['id_user' => $this->input->post('id_user', true)]);
            $username = $this->input->post('username', true);
            $email = $this->input->post('email', true);

            $uniq_username = $db['username'] == $username ? '' : '|is_unique[user.username]';
            $uniq_email = $db['email'] == $email ? '' : '|is_unique[user.email]';

            $this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_numeric' . $uniq_username);
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email' . $uniq_email);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Anggota";
            $data['row'] = $this->base->getWilayahById(userdata('wilayah'))->row();
            $data['potensi'] = $this->base->get('potensi')->result();
            $this->template->load('template', 'anggota/add', $data);
        } else {
            $input = $this->input->post(null, true);

            // var_dump($input);

            $data_anggota = [
                'nama_anggota' => $input['nama'],
                'kwarcab' => $input['kwarcab']
            ];

            $return_id =  $this->anggota->insert($data_anggota, 'anggota');

            $input_data = [
                'nama'          => $input['nama'],
                'username'      => $input['username'],
                'email'         => $input['email'],
                'no_telp'       => $input['no_telp'],
                'role'          => 3,
                'password'      => password_hash($input['password'], PASSWORD_DEFAULT),
                'foto'          => 'user.png',
                'anggota_id'    => $return_id
            ];

            $return_user =  $this->anggota->insert($input_data, 'user');

            $itung = count($input['potensi']);

            for ($i = 0; $i < $itung; $i++) {
                $potensi[$i] = array(
                    'user_id' => $return_user,
                    'potensi_id' => $this->input->post('potensi[' . $i . ']'),
                );
                $this->anggota->insert($potensi[$i], 'potensi_user');
            }

            if ($this->db->affected_rows() > 0) {
                set_pesan('Data berhasil disimpan');
            } else {
                set_pesan('Terjadi kesalahan saat menympan data', false);
            }

            redirect('anggota');

            // if ($this->base_model->insert('user', $input_data)) {
            //     set_pesan('data berhasil disimpan.');
            //     redirect('user');
            // } else {
            //     set_pesan('data gagal disimpan', false);
            //     redirect('user/add');
            // }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit User";
            $data['user'] = $this->base_model->get('user', ['id_user' => $id]);
            $this->template->load('template', 'user/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'nama'          => $input['nama'],
                'username'      => $input['username'],
                'email'         => $input['email'],
                'no_telp'       => $input['no_telp'],
                'role'          => $input['role']
            ];

            if ($this->base_model->update('user', 'id_user', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('anggota');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('anggota/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        // $id = encode_php_tags($getId);
        if ($this->base_model->delete('user', 'id_user', $getId)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('anggota');
    }

    public function toggle($getId)
    {
        // $id = encode_php_tags($getId);
        $status = $this->base_model->getUser('user', ['id_user' => $getId])['is_active'];
        $toggle = $status ? 0 : 1; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = $toggle ? 'user diaktifkan.' : 'user dinonaktifkan.';

        if ($this->base_model->update('user', 'id_user', $getId, ['is_active' => $toggle])) {
            set_pesan($pesan);
        }
        redirect('anggota');
    }
}
