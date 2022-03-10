# Pemrograman Web - Pertemuan 2
<br>

**File : lab1_tag_dasar.html**


Langkah pertama untuk membuat tugas ini adalah membuat file baru dengan nama : *lab1_tag_dasar* 
```
<!DOCTYPE html>
<head>
    <title>Tag HTML Dasar</title>
</head>
<body>
    
</body>
</html>
```

Dibawah ini adalah hasil dari source code tersebut : <br>
![Img - HTML Title Head](_imageData/titleHTML.png) <br>
Terlihat title pada tab browser berubah menjadi **Tag HTML Dasar**

1. Membuat Paragraf <br>
Pada bagian \<body> .... \</body> akan saya tambahkan paragraf, seperti berikut ini : 
```
<!-- Ini adalah paragraf pertama -->
<p>Kami sedang belajar HTML dasar, pada matakuliah Pemrograman Web di Prodi Teknik Informatika Universitas Pelita Bangsa. Pelajaran pertama yang kami dapat adalah membuat tampilan web sederhana dalam rangka mengenal tag-tag dasar HTML.</p>

<!-- Ini adalah paragraf kedua -->
<p>Ini merupakan sebuah paragraf yang terdiri dari beberapa kalimat yang saling mendukung sehingga menjadi satu kesatuan. Paragraf dibuat dengan menggunakan tag dasar html.</p>
```
<br>
Berikut adalah hasil setelah saya tambahkan paragraf baru

![Img - Add New Paragraph](_imageData/addParagraf.png)

- Merubah Perataan Paragraf
Setelah berhasil membuat paragraf baru, kali ini saya akan membuat perataan paragraf ke tengah dan kanan. Source code yang sudah ada akan saya rubah menjadi :
```
<!-- Ini adalah paragraf pertama -->
<p align="center">Kami sedang belajar HTML dasar, pada matakuliah Pemrograman Web di Prodi Teknik Informatika Universitas Pelita Bangsa. Pelajaran pertama yang kami dapat adalah membuat tampilan web sederhana dalam rangka mengenal tag-tag dasar HTML.</p>
<!-- Ini adalah paragraf kedua -->
<p align="right">Ini merupakan sebuah paragraf yang terdiri dari beberapa kalimat yang saling mendukung sehingga menjadi satu kesatuan. Paragraf dibuat dengan menggunakan tag dasar html.</p>
```
<br>

Berikut tampilannya akan terlihat paragraf pertama menjadi rata tengah, dan paragraf kedua menjadi rata kanan :

![Img - Alignment Paragraph HTML](_imageData/alignParagraf.png)

<br>
2. Menambahkan Judul
Setelah membuat paragraf, saatnya kita membuat Judul pada sebuah halaman Website. Yaitu menggunakan Heading.
Saya akan menambahkan tag heading pada tiap-tiap paragraf.

```
<!-- judul paragraf pertama -->
<h1>Belajar Dasar HTML</h1>
<!-- Ini adalah paragraf pertama -->
<p align="center">Kami sedang belajar HTML dasar, pada matakuliah Pemrograman Web di Prodi Teknik Informatika Universitas Pelita Bangsa. Pelajaran pertama yang kami dapat adalah membuat tampilan web sederhana dalam rangka mengenal tag-tag dasar HTML.</p>

<!-- judul paragraf kedua -->
<h2>Paragraf pada HTML</h2>
<!-- Ini adalah paragraf kedua -->
<p align="right">Ini merupakan sebuah paragraf yang terdiri dari beberapa kalimat yang saling mendukung sehingga menjadi satu kesatuan. Paragraf dibuat dengan menggunakan tag dasar html.</p>
```

Berikut hasil dari source code yang sudah diperbarui :

![Img - Heading HTML](_imageData/addHeading.png)

Dari paragraf kedua masih berada pada rata kanan, kita akan mencoba ubah menjadi rata kiri. Dengan source code berikut :

```
<p align="left">Ini merupakan sebuah paragraf yang terdiri dari beberapa kalimat yang saling mendukung sehingga menjadi satu kesatuan. Paragraf dibuat dengan menggunakan tag dasar html.</p>
```

Dan akan berubah seperti ini :
![Img - Change Alignment on Paragraph 2](_imageData/changeAlignmentP2N.png)

