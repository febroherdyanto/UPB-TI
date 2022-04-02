## Layout Sederhana - Febro Herdyanto
<hr>

| Nama | Febro Herdyanto |
| --- | --- |
| NIM | 312010043 |
| Kelas | TI.20.B.1 |
| Mata Kuliah | Pemrograman Web |
| Dosen | Agung Nugroho,S.Kom.,M.Kom |

<hr>

## Daftar Isi

| No | Judul | Link |
| --- | --- | --- |
| 1 | Membuat HTML File | [Click Here](#membuat-file-html) |
| 2 | Menambahkan CSS Pada Home | [Click Here](#menambahkan-css-pada-home) |
| 3 | Membuat Navigasi | [Click Here](#membuat-navigasi) |


## `Uraian Tugas`

### **Membuat File HTML** 

Langkah pertama dalam **Layout Sederhana** saya akan membuat file HTML dengan nama *home.html* dengan beberapa code html seperti dibawah ini : 

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Sederhana</title>
</head>
<body>

<div id="container">
    <header>
        <h1>Layout Sederhana</h1>
    </header>
    <nav>
        <a href="home.html" class="active">Home</a>
        <a href="artikel.html">Artikel</a>
        <a href="about.html">About</a>
        <a href="kontak.html">Kontak</a>
    </nav>
    <section id="hero"></section>
    <section id="wrapper">
        <section id="main"></section>
        <aside id="sidebar"></aside>
    </section>
    <footer>
        <p>&copy; 2021 - Universitas Pelita Bangsa</p>
    </footer>
</div>
    
</body>
</html>
```

Hasil dari syntax tersebut adalah seperti dibawah ini. <br>
![Img - Create HTML for Layout Sederhana](imgData/createHTML.png)

### **Menambahkan CSS Pada Home**

Setelah file HTML berhasil dibuat, maka saya akan menambahkan css untuk mempercantiknya. Dengan cara membuat file CSS : *style.css* dengan beberapa syntax seperti dibawah ini.

```
/* import google font */
@import
url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');
@import
url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap');
/* Reset CSS */
* {
    margin: 0;
    padding: 0;
}
body {
    line-height:1;
    font-size:100%;
    font-family:'Open Sans', sans-serif;
    color:#5a5a5a;
}
#container {
    width: 980px;
    margin: 0 auto;
    box-shadow: 0 0 1em #cccccc;
}
/* header */
header {
    padding: 20px;
}
header h1 {
    margin: 20px 10px;
    color: #b5b5b5;
}
```

Dan menambahkan tag untuk import css ke file HTML, yaitu :

```
<link rel="stylesheet" href="style.css">
```

Dan akan menampilkan output seperti berikut. <br>
![Img - Import CSS to Home Page](imgData/addCSSonHome.png)

### **Membuat Navigasi**