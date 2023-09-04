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
        $data['menu'] = 'tambah-gejala';
        $data['title_header'] = 'Halaman-Tambah';

        $this->form_validation->set_rules('id_gejala', 'ID Gejala', 'required|numeric');
        $this->form_validation->set_rules('nama_gejala', 'Nama Gejala', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', validation_errors());
            $this->load->view('admin/index', $data);
        } else {
            $id_gejala = $this->input->post('id_gejala');
            $nama_gejala = $this->input->post('nama_gejala');
            $jumlah_aturan = $this->input->post('jumlah');

            // Cek apakah id_gejala sudah ada dalam database
            $existing_gejala = $this->db->get_where('gejala', array('id' => $id_gejala))->row();

            if ($existing_gejala) {
                // Jika id_gejala sudah ada, tampilkan pesan kesalahan
                $this->session->set_flashdata('danger', 'ID Gejala sudah ada dalam database.');
                $this->load->view('admin/index', $data);
            } else {
                // Jika id_gejala belum ada, lakukan penyisipan data ke database
                $tambah = array(
                    'id' => $id_gejala,
                    'nama_gejala' => $nama_gejala,
                );

                $this->db->insert('gejala', $tambah);

                $data['menu'] = 'tambah-aturan';
                $data['jumlah_aturan'] = $jumlah_aturan;
                $data['id_aturan'] = $id_gejala;
                $this->session->set_flashdata('info', 'Silahkan Tambahkan Aturan');
                $this->load->view('admin/index', $data);
            }
        }
    }

    public function tambah_kerusakan()
    {
        // $this->load->model('Model_gejala'); // Load the model
        $data['menu'] = 'tambah-gejala';

        $jumlah = $this->input->post('jumlah');
        $id_aturan = $this->input->post('id_aturan');
        // if ($this->form_validation->run() == false) {
        //     $this->load->view('admin/tambah-aturan');
        // }
        for ($i = 0; $i < $jumlah; $i++) {

            $kerusakan = $this->input->post('kerusakan')[$i];
            $cf = $this->input->post('cf')[$i];

            $data_input = array(
                'id_aturan' => $id_aturan,
                'kerusakan' => $kerusakan,
                'cf' => $cf,
            );

            $this->db->insert('aturan', $data_input);
        }


        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');

        redirect('admin/TambahGejala'); // Redirect kembali ke halaman sebelumnya atau sesuaikan dengan halaman yang sesuai

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
