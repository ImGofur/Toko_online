<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belanja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
      
    }

    public function index()
    {
        $data = array(
            'title' => 'Keranjang Belanja',
            'isi' => 'v_belanja',
        );
        $this->load->view('v_belanja', $data, FALSE);
    }

    public function add()
    {
        $redirect_page = $this->input->post('redirect_page');
        $data = array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'), // Hapus baris ini agar qty diambil secara default
            'price'   => $this->input->post('price'),
            'name'    => $this->input->post('name'),
        );

        $this->cart->insert($data); 
        redirect($redirect_page, 'refresh');
    }
}

