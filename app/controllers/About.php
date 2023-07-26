<?php

class about extends Controller{

    public function index ($nama = "Yusron", $umur = 24, $pekerjaan = "Progammer"){
        
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = "About";

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');

    }

    public function page (){
        $data['judul'] = "Page";
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}