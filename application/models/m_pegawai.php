<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

    public function get_pegawai()
    {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('tabel_peminjaman');
        $this->db->order_by('id_pegawai', 'DESC');
        return $this->db->get();
    }
    public function simpan_pegawai($data)
    {
        //insert data
        return $this->db->insert("tabel_peminjaman", $data);
    }
}