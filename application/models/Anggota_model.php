<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_model extends CI_Model
{
    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function getPotensiById($id)
    {
        $this->db->select('*');
        $this->db->from('potensi_user');
        $this->db->where('user_id', $id);
        $this->db->join('user', 'user.id_user = potensi_user.user_id');
        $this->db->join('potensi', 'potensi.id_potensi = potensi_user.potensi_id');
        return $this->db->get();
    }

}