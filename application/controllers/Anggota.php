<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
        $this->load->model('base_model', 'base');
    }

    public function index()
    {
        $data['title'] = "Data Anggota";
        $data['users'] = $this->base_model->getAnggota(userdata('wilayah'))->result_array();
        $data['wilayah'] = $this->base_model->get('wilayah');
        $anggota = $this->base_model->getWhere()->result();

        if (userdata('role') == 1) {
            $tes = $this->anggota->getExportWilayah();
            // var_dump($tes);
        } elseif (userdata('role') == 2) {
            $tesWil = $this->anggota->getExportWilayah(userdata('wilayah'));
            // var_dump($tesWil);
        }

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
            $data['title'] = "Tambah Anggota";
            $data['row'] = $this->base->getWilayahById(userdata('wilayah'))->row();
            $data['potensi'] = $this->base->get('potensi')->result();
            $data['wilayah'] = $this->base_model->get('wilayah')->result();
            $this->template->load('template', 'anggota/add', $data);
        } else {
            $input = $this->input->post(null, true);

            var_dump($input);

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
                'wilayah'       => $input['kwarcab'],
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
        }
    }

    public function edit($id)
    {
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit User";
            $data['row'] = $this->base->getWilayahById(userdata('wilayah'))->row();
            $potensi = $this->anggota->getPotensiAnggota($id)->result_array();
            $data['user'] = $this->anggota->get($id);
            $arr = array();
            foreach ($potensi as $datas) {
                array_push($arr, $datas['potensi_id']);
            }

            $data['potensi'] = $arr;
            $data['wilayah'] = $this->base_model->get('wilayah')->result();

            $this->template->load('template', 'anggota/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $this->anggota->deleteAll($id);
            $input_data = [
                'nama'          => $input['nama'],
                'no_telp'       => $input['no_telp'],
            ];

            $this->base_model->update('user', 'id_user', $id, $input_data);

            $itung = count($input['potensi']);

            for ($i = 0; $i < $itung; $i++) {
                $potensi[$i] = array(
                    'user_id' => $input['id_user'],
                    'potensi_id' => $this->input->post('potensi[' . $i . ']'),
                );
                $this->anggota->insert($potensi[$i], 'potensi_user');
            }

            if ($this->db->affected_rows() > 0) {
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

    public function export()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = [
            'font' => ['bold' => true], // Set font nya jadi bold
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ],
            'borders' => [
                'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
                'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
                'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
                'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
            ]
        ];
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = [
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ],
            'borders' => [
                'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
                'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
                'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
                'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
            ]
        ];
        $sheet->setCellValue('A1', "DATA SISWA"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $sheet->mergeCells('A1:F1'); // Set Merge Cell pada kolom A1 sampai E1
        $sheet->getStyle('A1')->getFont()->setBold(true); // Set bold kolom A1
        // Buat header tabel nya pada baris ke 3
        $sheet->setCellValue('A3', "NO");
        $sheet->setCellValue('B3', "Nama");
        $sheet->setCellValue('C3', "No Telp");
        $sheet->setCellValue('D3', "Email");
        $sheet->setCellValue('E3', "Wilayah");
        $sheet->setCellValue('F3', "Potensi");
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $sheet->getStyle('A3')->applyFromArray($style_col);
        $sheet->getStyle('B3')->applyFromArray($style_col);
        $sheet->getStyle('C3')->applyFromArray($style_col);
        $sheet->getStyle('D3')->applyFromArray($style_col);
        $sheet->getStyle('E3')->applyFromArray($style_col);
        $sheet->getStyle('F3')->applyFromArray($style_col);
        // Panggil function view yang ada di Model untuk menampilkan semua data
        // $potensi = $this->anggota->getPotensiAnggota($id)->result_array();
        // $arr = array();
        // foreach ($potensi as $datas) {
        //     array_push($arr, $datas['potensi_id']);
        // }

        $anggota = $this->base_model->getWhere()->result();
        if (userdata('role') == 1) {
            $tes = $this->anggota->getExportWilayah();
            var_dump($tes);
        } elseif (userdata('role') == 2) {
            $tes = $this->anggota->getExportWilayah(userdata('wilayah'));
            var_dump($tes);
        }
        // var_dump($anggota);
        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach ($tes as $v => $data) { // Lakukan looping pada variabel anggota
            $sheet->setCellValue('A' . $numrow, $no);
            $sheet->setCellValue('B' . $numrow, $data->nama);
            $sheet->setCellValue('C' . $numrow, $data->no_telp);
            $sheet->setCellValue('D' . $numrow, $data->email);
            $sheet->setCellValue('E' . $numrow, $data->nama_wilayah);
            $sheet->setCellValue('F' . $numrow, 'aksd');

            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $sheet->getStyle('A' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('B' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('C' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('D' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('E' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('E' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('F' . $numrow)->applyFromArray($style_row);

            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $sheet->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $sheet->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $sheet->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $sheet->getColumnDimension('D')->setWidth(20); // Set width kolom D
        $sheet->getColumnDimension('E')->setWidth(30); // Set width kolom E

        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $sheet->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $sheet->setTitle("Laporan Data Siswa");
        // Proses file excel
        ob_end_clean();
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Anggota export ' . date('Y-m-d') . '.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
