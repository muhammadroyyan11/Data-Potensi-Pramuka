<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function get($where = null)
    {
        $this->db->select('*');
        $this->db->from('laporan');
        if ($where != null) {
            $this->db->where($where);
        }
        elseif ($this->input->get('from') != '') {
            $this->db->where('date >= ', $this->input->get('from'));
        }
        elseif ($this->input->get('to') != ''){
            $this->db->where('date <= ', $this->input->get('to'));
        }
        elseif ($this->input->get('wilayah') != ''){
            $this->db->where('wilayah_id', $this->input->get('kasir'));
        }
        $this->db->join('wilayah', 'wilayah.id_wilayah = laporan.wilayah_id');
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
