<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function get($where)
    {
        $this->db->select('*');
        $this->db->from('laporan');
        $this->db->where($where);
        return $this->db->get();
    }

    public function add($post)
    {
        $params = [
            'judul_kegiatan' => $post['judul_kegiatan'],
            'deskripsi' => $post['deskripsi'],
            'lampiran' => $post['lampiran'],
            'date' => date('Y-m-d'),
            'user_id' => userdata('id_user')
        ];
        $this->db->insert('laporan', $params);
    }
}
