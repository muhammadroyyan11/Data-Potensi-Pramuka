<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function get($where = null)
    {
        $this->db->select('*');
        $this->db->from('berita');
        if ($where != null) {
            $this->db->where($where);
        }
        $this->db->order_by('id_berita', 'DESC');
        return $this->db->get();
    }

    public function add($post)
    {
        $params = [
            'judul' => $post['judul'],
            'penulis' => $post['penulis'],
            'isi' => $post['isi'],
            'foto' => $post['lampiran'],
            'status' => 0,
            'seo_judul' => slugify($post['judul']),
            'user_id' => userdata('id_user')
        ];
        $this->db->insert('berita', $params);
    }

    public function editPengajuan($post)
    {
        $params = [
            'judul' => $post['judul'],
            'editor' => $post['editor'],
            'isi' => $post['isi'],
            'status' => $post['status'],
        ];

        $this->db->where('id_berita', $post['id_berita']);
        $this->db->update('berita', $params);
    }
}
