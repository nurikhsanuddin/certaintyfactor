<?php

class TambahGejala extends CI_Controller
{
    public function index()
    {
        $data['menu'] = 'tambah-gejala';
        // $this->load->view('templates/header', $data);
        $data['title_header'] = 'Halaman-Tambah';
        $this->load->view('admin/index', $data);

        // $this->load->view('templates/footer');
    }
    public function tambah_gejala()
    {
        $data['menu'] = 'tambah-aturan';

        // $id_gejala = $this->input->post('id_gejala');
        // $nama_gejala = $this->input->post('nama_gejala');
        // $jumlah_aturan = $this->input->post('jumlah');
        // $tambah = array(
        //     'id' => $id_gejala,
        //     'nama_gejala' => $nama_gejala,
        // );

        // $this->db->insert('gejala', $tambah);

        // $data['title_header'] = 'Halaman-Tambah';
        // $data['jumlah_aturan'] = $jumlah_aturan;
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
