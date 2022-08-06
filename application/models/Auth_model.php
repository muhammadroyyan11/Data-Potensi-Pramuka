<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function cek_username($username)
    {
        $query = $this->db->get_where('user', ['username' => $username]);
        return $query->num_rows();
    }

    public function get_password($username)
    {
        $data = $this->db->get_where('user', ['username' => $username])->row_array();
        return $data['password'];
    }

    public function userdata($username)
    {
        
        return $this->db->get_where('user', ['username' => $username])->row_array();
        // $this->db->select('*');
        // $this->db->from('potensi_user');
        // $this->db->join('user','user.id_user = potensi_user.user_id');
        // $this->db->join('potensi','potensi.id_potensi = potensi_user.potensi_id');
        // $this->db->where('');
    }
}
