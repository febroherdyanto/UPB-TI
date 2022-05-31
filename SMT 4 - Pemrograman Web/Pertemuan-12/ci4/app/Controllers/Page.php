<?php

namespace App\Controllers;

class Page extends BaseController{

    public function about(){
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah Halaman About yang menjelaskan tentang isi halaman, dibuat melalui Views'
        ]);
    }

    public function contact(){
        echo "<h1>Ini Halaman Contact</h1>";
    }

    public function faqs(){
        echo "<h1>Ini Halaman FAQ</h1>";
    }

    public function tos(){
        echo "<h1>Ini Halaman Term of Services</h1>";
    }

}

?>