<?php

class About extends Controller{

    public function index($nama = 'Restu', $pekerjaan = 'mahasiswa', $umur = 21)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'about me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'pages';
        $this->view('templates/header');
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}

?>