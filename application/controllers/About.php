<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
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
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        $about = $this->base->get('about')->row();

        $data = array(
            'title' => 'Edit About',
            'row' => $about
        );

        $this->template->load('template', 'about/about', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);

        $this->base->saveAbout($post);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil disimpan');
        }

        redirect('about');
    }

    public function del($id)
    {
        $where = array('id_wilayah' => $id);
        $this->base_model->del('wilayah', $where);
        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil di hapus.');
        }
        redirect('wilayah');
    }
}
