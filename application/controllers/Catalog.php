<?php

class Catalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_catalog');
        $this->load->library('form_validation');
    }
    public function catalog_tampil()
    {
        $data['judul'] = 'Catalog';
        $data['catalog'] = $this->Model_catalog->getAllCatalog();
        $data['active'] = 'active2';
        // $this->load->view('templates/header', $data);
        $this->load->view('catalog/index', $data);
        // $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Item';
        $data['active'] = 'active2';

        $this->form_validation->set_rules('nama', 'Nama Barang', 'required');
        $this->form_validation->set_rules('id', 'ID', 'required|numeric');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('catalog/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            echo "berhasil";
        }
    }
}
