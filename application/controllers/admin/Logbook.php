<?php

class Logbook extends CI_Controller
{
    public function index()
    {
        $data['menu'] = 'logbook';
        // $this->load->view('templates/header', $data);
        $data['title_header'] = 'Halaman-Logbook';
        $this->load->view('admin/index', $data);

        // $this->load->view('templates/footer');
    }
    // public function get_data()
    // {

    //     $this->db->select('*');
    //     $this->db->from('logbook');
    //     $query = $this->db->get();

    //     $result = $query->result();

    //     echo json_encode($result);
    // }
}
