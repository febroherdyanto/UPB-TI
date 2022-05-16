# Praktikum 7 - Pertemuan 9 - Pemrograman Web

<hr>

| Nama | Febro Herdyanto |
| --- | --- |
| NIM | 312010043 |
| Kelas | TI.20.B.1 |
| Mata Kuliah | Pemrograman Web |
| Dosen | Agung Nugroho,S.Kom.,M.Kom |

<hr>

Haloo, saya disini akan membuat tugas menggunakan PHP dengan Web Server Apache2 (XAMPP Application). Mari simak ulasan saya dibawah ini.

### `Instalasi Web Server (XAMPP)`

Saya telah melakukan instalasi Web Server sebelumnya, yaitu XAMPP Application. <br>
![Image Data - Directory XAMPP htdocs](imgData/dirhtdocs.png)

<br>

Setelah itu saya akan mencoba menghidupkan Apache pada XAMPP Control Panel. <br>
![Image Data - XAMPP Control Panel](imgData/xamppCP.png)

<br>

Saya akan menjalankan Web Server tersebut pada Web Browser Chrome, dengan mengetikkan [http://localhost/](http://localhost/) atau [http://127.0.0.1/](http://127.0.0.1/) . Maka akan muncul tampilan seperti berikut. <br>
![Image Data - Localhost View on Browser](imgData/localhost.png)

<hr>

Disini saya merubah konfigurasi Documents Root pada XAMPP ke file dimana tugas ini berada. <br>

### `Memulai PHP`

Disini saya akan membuat folder baru dengan nama **lab7_php_dasar** yang diletakkan pada folder **Pertemuan-9** . Berikut adalah tampilannya. <br>
![Image Data - Tasks Folder / Change Directory Root on Apache Conf](imgData/rootFolder.png) <br>
Dan akan menampilan seperti dibawah ini pada browser. <br>

![Image Data - View folder on Browser](imgData/rootFolderView.png)

### `PHP Dasar / Basic PHP`

Pada point PHP dasar ini saya akan membuat file baru didalam folder *lab7_php_dasar* yaitu **php_dasar.php**. Pada file PHP tersebut saya akan mengisikan file PHP yang berisikan Hello World.

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>

    <h1>Belajar PHP Dasar</h1>
    
    <?php
        echo "Hello World!";
    ?>

</body>
</html>
```

Berikut adalah tampilan pada web browsernya. <br>
![Image Data - Output PHP Dasar](imgData/php_dasar.png)

### `Variable PHP`

Setelah belajar menampilkan output menggunakan PHP, kali ini saya membuat variable pada PHP. Untuk variable, PHP menggunakan $ (dolar) untuk mendefinisikan. 

```
    <?php
        $nim = "312010043";
        $nama = "Febro Herdyanto";

        echo "NIM : ".$nim."<br>";
        echo "Nama : $nama";
    ?>
```

Berikut adalah output dari source code diatas. <br>
![Image Data - Variable PHP](imgData/variablePHP.png)