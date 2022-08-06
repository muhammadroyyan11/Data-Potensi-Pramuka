<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudep extends CI_Controller {

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
        $this->load->model('Wilayah_model', 'wilayah');
    }

	public function index()
	{
        $wilayah = $this->base_model->get('wilayah')->result();

		$data = array(
            'title' => 'Data Wilayah',
            'wilayah' => $wilayah
        );

        $this->template->load('template', 'wilayah/wilayah', $data);
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		
		$this->wilayah->add($post);

		if ($this->db->affected_rows() > 0) {
			set_pesan('Data berhasil disimpan');
		}

		redirect('wilayah');
	}
}
