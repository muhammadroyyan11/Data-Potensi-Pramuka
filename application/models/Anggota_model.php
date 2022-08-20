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

    public function getPotensiAnggota($id)
    {
        $this->db->select('potensi_id, potensi.nama_potensi');
        $this->db->from('potensi_user');
        $this->db->where('user_id', $id);
        $this->db->join('user', 'user.id_user = potensi_user.user_id');
        $this->db->join('potensi', 'potensi.id_potensi = potensi_user.potensi_id');
        return $this->db->get();
    }
    public function getPotensiId($id)
    {
        $this->db->select('potensi_id');
        $this->db->from('potensi_user');
        $this->db->where('user_id', $id);
        $this->db->join('user', 'user.id_user = potensi_user.user_id');
        $this->db->join('potensi', 'potensi.id_potensi = potensi_user.potensi_id');
        return $this->db->get();
    }

    public function deleteAll($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('potensi_user');
    }

    public function get($id)
    {
        $this->db->select('user.*, potensi_user.potensi_id, potensi.nama_potensi AS nama_potensi');

        $this->db->join('potensi_user', 'user.id_user = potensi_user.user_id', 'left');

        $this->db->join('potensi', 'potensi_user.potensi_id = potensi.id_potensi', 'left');

        $this->db->where('user.id_user', $id);

        $this->db->order_by('user.id_user', 'desc');

        $this->db->group_by('user.id_user');

        return $this->db->get('user')->row();
    }
}
