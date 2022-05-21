# Praktikum 8 - Pertemuan 10 - Pemrograman Web

<hr>

| Nama | Febro Herdyanto |
| --- | --- |
| NIM | 312010043 |
| Kelas | TI.20.B.1 |
| Mata Kuliah | Pemrograman Web |
| Dosen | Agung Nugroho,S.Kom.,M.Kom |

<hr>

Hi! Saya kali ini akan membuat folder baru dengan nama Pertemuan 10, dimana pada folder ini akan menjelaskan Pemrograman Web menggunakan PHP dan MySQL. <br>
Pada pertemuan 9, saya sudah menjelaskan bagaimana cara membuat file sederhana menggunakan PHP. Dan ini adalah salah satu tugas dari mata kuliah saya Pemrograman Web yang diampu oleh Bapak Agung Nugroho di Universitas Pelita Bangsa Cikarang, Bekasi. <br>
Langsung mulai sajaa...

## `Web Server Preparation`

Pada point *Web Server Preparation*, sebelumnya saya menggunakan XAMPP. Berhubung XAMPP saya sedang bermasalah dengan SQL, maka saya ganti menggunakan Ampps. Penggunaannya sama dengan XAMPP. <br>
Disini saya akan menjalankan Apache dan MySQL pada aplikasi Ampps. <br>
![Web Server Ampps is ON](imgData/AmppsON.png) <br>
Selain itu saya juga membuat folder baru dengan nama *lab8_php_database* pada **root directory** Ampps tersebut. Root directory terletak pada **C:\Program Files\Ampps\www**. <br>
![Ampps - Root Directory Folders](imgData/RootDir.png)

## `Create Database using CLI on Command Prompt`

Disini saya akan menjelaskan membuat database MySQL dengan menggunakan CMD / Command Prompt. Selain menggunakan CMD, pembuatan database juga dapat dilakukan menggunakan browser dan menuju ke halaman PHPMyAdmin. Dengan mengetikkan url berikut [http://localhost/phpmyadmin](http://localhost/phpmyadmin) .<br>
Berikut tampilan MySQL ketika menggunakan CLI. <br>
![MySQL CLI on Command Prompt](imgData/sqlCLI.png).

Pada gambar diatas ditampilkan bagaimana cara masuk ke direktori MySQL yang ada di Web Server kita. <br>
Langkah selanjutnya, saya akan membuat database baru dengan nama **latihan1** . Dengan mengetikkan perintah berikut pada CMD. 

```
mysql> create database latihan1;
//Query OK, 1 row affected (0.01 sec)
```

![MySQL - Database Created using CLI method](imgData/databaseCreated.png)

## `Create Table on Latihan1`