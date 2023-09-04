
<?php

class Main extends CI_Controller
{
    public function index()
    {
        // if (!$this->user->get_akses('id menu', ['read'])) {
        //   redirect('forbidden');
        // };
        // $data['title_simrs'] = "Berkas Medis";
        redirect('admin/dashboard');
    }
}
