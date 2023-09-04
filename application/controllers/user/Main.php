<?php

class Main extends CI_Controller
{
    public function index()
    {
        $data['menu'] = 'main';
        // $this->load->view('templates/header', $data);
        $data['title_header'] = 'Halaman-User';
        $this->load->model('Model_gejala'); // Replace with your actual model name

        // Get symptoms from the model
        $data['get_gejala'] = $this->Model_gejala->getAllGejala(); // Replace with your actual model method

        $this->load->view('user/index', $data);

        // $this->load->view('templates/footer');
    }
    public function proses()
    {
        $this->load->model('Model_gejala');
        $gejala = $this->input->post('gejala');
        $hasilKerusakan =  $this->Model_gejala->deteksiKerusakan($gejala);;
        $data['gejala'] = $gejala;
        $data['hasilkerusakan'] = $hasilKerusakan;
        $data['menu'] = 'hasil';
        $this->load->view('user/index', $data);
    }
}
