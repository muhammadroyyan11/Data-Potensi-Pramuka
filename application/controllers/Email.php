<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PhpMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('kategori_model', 'category', true);
        $this->load->model('Base_model', 'base', true);
    }

    public function index()
    {
        echo 'TeS';
    }
}

/* End of file Contact.php */
