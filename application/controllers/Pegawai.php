<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function index()
    {
        //load model
        $this->load->model('M_pegawai');

        $data = array(
            'data_pegawai' => $this->M_pegawai->get_pegawai()->result()
        );
        //load view
        $this->load->view('data_pegawai', $data);
    }
    public function tambah()
    {
      //load view
      $this->load->view('tambah_pegawai');
    }
    public function simpan()
    {
       //load model
       $this->load->model('m_pegawai');

        //get data dari form
        $Nama_Pegawai             = $this->input->post('Nama_Pegawai');
        $Kegiatan                 = $this->input->post('Kegiatan');
        $Tanggal_Peminjaman       = $this->input->post('Tanggal_Peminjaman');
        $No_Telepon               = $this->input->post('No_Telepon');

        $data = array(
             'Nama_Pegawai'                => $Nama_Pegawai,    
             'Kegiatan'                    => $Kegiatan,
             'Tanggal_Peminjaman'          => $Tanggal_Peminjaman, 
             'No_Telepon'                  => $No_Telepon
        );

        //insert data via model
        $this->m_pegawai->simpan_pegawai($data);

        //redirect ke controller siswa
        redirect('Pegawai');

    }
}