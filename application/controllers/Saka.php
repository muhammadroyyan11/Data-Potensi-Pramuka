<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saka extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		cek_login();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Wilayah_model', 'wilayah');
		$this->load->model('Anggota_model', 'anggota');
		$this->load->model('Base_model', 'model');
	}

	public function index()
	{
		$data['title'] = "Data Anggota Saka";
		$data['users'] = $this->base_model->getWhereByPotensi(2)->result_array();
		$data['usersAdmin'] = $this->base_model->getWhereByAdmin(2)->result_array();
		$data['wilayah'] = $this->base_model->get('wilayah');

		$this->template->load('template', 'perPotensi/data', $data);
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
