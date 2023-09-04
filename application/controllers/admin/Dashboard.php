<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['menu'] = 'dashboard';
        // $this->load->view('templates/header', $data);
        $data['title_header'] = 'Halaman-Dashboard';
        $this->load->view('admin/index', $data);

        // $this->load->view('templates/footer');
    }
}
