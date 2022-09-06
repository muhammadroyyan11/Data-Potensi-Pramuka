<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\src\PhpMailer;
use PHPMailer\PHPMailer\src\SMTP;
use PHPMailer\PHPMailer\src\Exception;

class Auth extends CI_Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model', 'auth');
        $this->load->model('Base_model', 'base');
        $this->load->model('Anggota_model', 'anggota');
    }

    private function _has_login()
    {
        if ($this->session->has_userdata('login_session')) {
            redirect('dashboard');
        }
    }

    public function index()
    {
        $this->_has_login();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Aplikasi';
            $this->template->load('tempauth', 'auth/auth', $data);
        } else {
            $input = $this->input->post(null, true);

            $cek_username = $this->auth->cek_username($input['username']);
            if ($cek_username > 0) {
                $password = $this->auth->get_password($input['username']);
                if (password_verify($input['password'], $password)) {
                    $user_db = $this->auth->userdata($input['username']);
                    if ($user_db['is_active'] != 1) {
                        set_pesan('akun anda belum aktif/dinonaktifkan. Silahkan hubungi admin.', false);
                        redirect('auth');
                    } else {
                        $potensi = $this->anggota->getPotensiAnggota($user_db['id_user'])->result_array();

                        foreach ($potensi as $key => $data) {
                            $arr[] = strtolower($data['nama_potensi']);
                        }

                        $userdata = [
                            'user'  => $user_db['id_user'],
                            'role'  => $user_db['role'],
                            'wilayah' => $user_db['wilayah'],
                            'foto' => $user_db['foto'],
                            'anggota_id' => $user_db['anggota_id'],
                            'timestamp' => time(),
                            'potensi' => $arr
                        ];
                        $this->session->set_userdata('login_session', $userdata);
                        redirect('dashboard');
                    }
                } else {
                    set_pesan('password salah', false);
                    redirect('auth');
                }
            } else {
                set_pesan('username belum terdaftar', false);
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('login_session');

        set_pesan('anda telah berhasil logout');
        redirect('auth');
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|trim');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('kwarcab', 'Kwatir Cabang', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['wilayah'] = $this->base_model->get('wilayah')->result();
            $data['title'] = 'Buat Akun';
            $this->template->load('tempauth', 'auth/register', $data);
        } else {
            $input = $this->input->post(null, true);
            unset($input['password2']);

            $data_anggota = [
                'nama_anggota' => $input['nama'],
                'kwarcab' => $input['kwarcab']
            ];

            $return_id =  $this->anggota->insert($data_anggota, 'anggota');

            $input_user = [
                'nama'          => $input['nama'],
                'username'      => $input['username'],
                'email'         => $input['email'],
                'no_telp'       => $input['no_telp'],
                'role'          => 3,
                'password'      => password_hash($input['password'], PASSWORD_DEFAULT),
                'foto'          => 'user.png',
                'wilayah'       => $input['kwarcab'],
                'anggota_id'    => $return_id
            ];

            // siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $input['email'],
                'token' => $token,
                'date_created' => time()
            ];

            $return_user =  $this->anggota->insert($input_user, 'user');
            $this->db->insert('user_token', $user_token);

            $this->email($token);

            if ($return_user) {
                set_pesan('Register berhasil. Silahkan hubungi admin untuk mengaktifkan akun anda.');
                redirect('auth');
            } else {
                set_pesan('gagal menyimpan ke database', false);
                redirect('register');
            }
        }
    }

    public function send()
    {
        $data['wilayah'] = $this->base_model->get('wilayah')->result();
        $data['title'] = 'Buat Akun';
        $this->template->load('tempauth', 'auth/testing', $data);
    }

    public function email($token)
    {
        $post = $this->input->post(null, TRUE);
        $this->load->library('email');

        $to                 = $post['email'];
        $subject            = 'Aktivasi Akun';
        $message            = 'Link';

        $mail = new PhpMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'mail.projectskuy.site';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'pramuka@projectskuy.site'; // ubah dengan alamat email Anda
            $mail->Password   = '1234Arema'; // ubah dengan password email Anda
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom('pramuka@projectskuy.site', 'no-reply'); // ubah dengan alamat email Anda
            $mail->addAddress($to);
            $mail->addReplyTo('pramuka@projectskuy.site', 'no-reply'); // ubah dengan alamat email Anda

            // Isi Email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = '
            <h3>Hallo ' . $post['email'] . ',</h3><br>
            <p>Klik disini untuk melakukan aktivasi akun anda : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">klik disini</a> </p>
            <br>Salam,<br>Admin Kwarcab Cilegon';

            $mail->send();

            // Pesan Berhasil Kirim Email/Pesan Error

            set_pesan('Silahkan cek email anda untuk melakukan aktivasi');
            return redirect('auth');
        } catch (Exception $e) {
            set_pesan('Gagal mengirim token aktivasi');
            return redirect('auth');
        }

        // $config = [
        //     'protocol'  => 'smtp',
        //     'smtp_host' => 'mail.projectskuy.site',
        //     'smtp_user' => 'pramuka@porjectskuy.site',
        //     'smtp_pass' => '1234567890',
        //     'smtp_port' => 587,
        //     'mailtype'  => 'html',
        //     'charset'   => 'utf-8',
        //     'newline'   => "\r\n"
        // ];

        // $this->email->initialize($config);

        // $this->email->from('pramuka@porjectskuy.site', 'Kwarcab Cilegon');
        // $this->email->to($post['email']);

        // $this->email->subject('Email Test');
        // $this->email->message('Testing the email class.');

        // if ($this->email->send()) {
        //     return true;
        // } else {
        //     echo $this->email->print_debugger();
        //     die;
        // }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' has been activated! Please login.</div>');
                    redirect('auth');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    set_pesan('Akun berhasil diaktivasi');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong token.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong email.</div>');
            redirect('auth');
        }
    }
}
