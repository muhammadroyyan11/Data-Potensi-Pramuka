<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sosmed_model extends CI_Model
{
    public function add($post)
    {
        $params = [
            'nama_sosmed' => $post['sosmed'],
            'icon' => $post['icon'],
            'link' => $post['link']
        ];

        $this->db->insert('sosmed', $params);
    }
}
