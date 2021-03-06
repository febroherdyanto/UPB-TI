<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Page extends BaseController{

    public function about(){
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah Halaman About yang menjelaskan tentang isi halaman, dibuat melalui Views'
        ]);
    }

    public function contact(){
        return view('contact', [
            'title' => 'Contact Us Page',
            'content' => 'Ini adalah Halaman <b>Contact Us</b>. Anda dapat mengirimkan pesan pada halaman ini'
        ]);
    }

    public function faqs(){
        echo "<h1>Ini Halaman FAQ</h1>";
    }

    public function tos(){
        echo "<h1>Ini Halaman Term of Services</h1>";
    }

    public function artikel()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/index', compact('artikel','title'));
    }

    public function view($slug){
        $model = new ArtikelModel();
        $artikel = $model->where([
            'slug' => $slug
        ])->first();

        //Menampilkan error apabila tidak ada data
        if(!$artikel){
            throw PageNotFoundException::forPageNotFound();
        }
        $title = $artikel['judul'];
        return view('artikel/detail', compact('artikel','title'));
    }

    /*
    public function artikel(){
        return view('artikel', [
            'title' => 'Article Page',
            'content' => 'Halaman ini adalah untuk menampilkan berita / artikel yang dirangkum.',
            'judul_artikel' => 'Membuat Web Menggunakan Code Igniter 4 - by. Febro',
            'isi_artikel' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias voluptatibus corporis voluptas repellat nulla labore, officiis atque soluta corrupti nobis consectetur fugit eius voluptates, exercitationem amet dolorem totam porro necessitatibus?' 
        ]);
    }
    */

}


?>