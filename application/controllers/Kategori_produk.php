<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_produk extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategoriproduk');
        
        
    }
    
    
    public function kategori($id_kategori)
    {
        $kategori = $this->m_kategoriproduk->kategori($id_kategori);
        $data = array(
            'title' => 'Kategori Produk :'. $kategori->nama_kategori,
            'produk'=> $this->m_kategoriproduk->get_all_data_kategoriproduk($id_kategori),
            'isi' => 'v_kategori_produk',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
        
    }

  
}