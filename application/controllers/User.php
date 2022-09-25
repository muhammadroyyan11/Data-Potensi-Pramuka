<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        if (!is_admin()) {
            redirect('dashboard');
        }
        $this->load->library('form_validation');
        $this->load->model('anggota_model', 'anggota');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title'] = "User Management";
        $data['users'] = $this->base_model->getUsers(userdata('id_user'));
        $data['wilayah'] = $this->base_model->get('wilayah');
        $this->template->load('template', 'user/data', $data);
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]|alpha_numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|trim');
            $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
        } elseif($mode == 'edit'){
            $db = $this->base_model->get('user', ['id_user' => $this->input->post('id_user', true)]);
            $username = $this->input->post('username', true);
            $email = $this->input->post('email', true);

            if ($this->input->post('password')) {
                $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|trim');
                $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
            }

            if ($this->input->post('password2')) {
                $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
            }

            // $uniq_username = $db['username'] == $username ? '' : '|is_unique[user.username]';
            // $uniq_email = $db['email'] == $email ? '' : '|is_unique[user.email]';

            // $this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_numeric' . $uniq_username);
            // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email' . $uniq_email);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah User";
            $data['wilayah'] = $this->base_model->get('wilayah')->result();
            $this->template->load('template', 'user/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'nama'          => $input['nama'],
                'username'      => $input['username'],
                'email'         => $input['email'],
                'no_telp'       => $input['no_telp'],
                'role'          => $input['role'],
                'wilayah'       => $input['wilayah'],
                'password'      => password_hash($input['password'], PASSWORD_DEFAULT),
                'foto'          => 'user.png'
            ];

            if ($this->base_model->insert('user', $input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('user');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('user/add');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        if($this->input->post('password')){
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'matches[password]',
                array('matches' => '%s tidak sesuai')
            );
        } 
        if($this->input->post('password2')){
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'matches[password]',
                array('matches' => '%s tidak sesuai')
            );
        }

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit User";
            $data['user'] = $this->anggota->get($id);
            $data['wilayah'] = $this->base_model->get('wilayah')->result();
            $this->template->load('template', 'user/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'nama'          => $input['nama'],
                'username'      => $input['username'],
                'email'         => $input['email'],
                'no_telp'       => $input['no_telp'],
                'role'          => $input['role'],
                'wilayah'       => $input['kwarcab']
            ];

            if (!empty($input['password'])) {
                $input_data = [
                    'password' => password_hash($input['password'], PASSWORD_DEFAULT),
                ];
            }

            if ($this->base_model->update('user', 'id_user', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('user');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('user/edit/' . $id);
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
        redirect('user');
    }

    function username_check(){
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND id_user != '$post[id_user]'");
        if($query->num_rows > 0) {
            $this->form_validation->set_message('username_check', '{field} sudah di pakai');
            return FALSE;
        } else {
            return TRUE;
        }
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
        redirect('user');
    }
}
