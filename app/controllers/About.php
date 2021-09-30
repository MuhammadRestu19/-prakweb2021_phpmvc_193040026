<?php

class About{

    public function index($nama = 'Restu', $pekerjaan = 'mahasiswa'){
        echo "halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page(){
        echo 'About/page';
    }
}

?>