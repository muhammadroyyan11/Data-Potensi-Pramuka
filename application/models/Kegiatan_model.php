<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
{
    public function add($post)
    {
        $params = [
            'nama_wilayah' => $post['wilayah']
        ];

        $this->db->insert('wilayah', $params);
    }
}