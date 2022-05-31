<?php

namespace App\Controllers;

class Page extends BaseController{

    public function about(){
        echo "<h1>Ini Halaman About</h1>";
    }

    public function contact(){
        echo "<h1>Ini Halaman Contact</h1>";
    }

    public function faqs(){
        echo "<h1>Ini Halaman FAQ</h1>";
    }

}

?>