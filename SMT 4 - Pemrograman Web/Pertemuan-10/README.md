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

Tabel merupakan kumpulan data (nilai) yang diorganisasikan ke dalam baris (record) dan kolom (field). Masing-masing kolom memiliki nama yang spesifik dan unik.<br>
Setelah database dibuat, saya akan membuat table pada database latihan1. Sebelum membuat tamble, pada CLI SQL kita diharuskan memilih database yang akan digunakan dengan mengetikkan perintah berikut pada CMD. 

```
mysql> use latihan1;
//Database changed
```

![MySQL - Database Changed to latihan1](imgData/dbChanged.png) 

<br>

Setelah memilih database, saatnya membuat database dengan perintah berikut.

```
mysql> create table data_barang(
    -> id_barang int(10) auto_increment Primary Key,
    -> kategori varchar(30),
    -> nama varchar(30),
    -> gambar varchar(100),
    -> harga_beli decimal(10,0),
    -> harga_jual decimal(10,0),
    -> stok int(4)
    -> );
//Query OK, 0 rows affected, 2 warnings (0.04 sec)
```

![MySQL - Table data_barang Created on Database latihan1](imgData/tableCreated.png)

## `Add Records on Table`

Setelah table dalam database sudah dibuat, saya akan mencoba untuk menambahkan data / record pada table tersebut. Dengan memasukkan perintah berikut pada CMD.

```
mysql> insert into data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok)
    -> values ('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000, 2400000, 5),
    -> ('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5),
    -> ('Elektronik', 'HP OPPO Andoid', 'hp_oppo.jpg', 1800000, 2300000, 5);
// Query OK, 3 rows affected (0.02 sec)
// Records: 3  Duplicates: 0  Warnings: 0
```

![MySQL - Add records on Table data_barang](imgData/insertData.png)

## `Show Record from Table`

Data telah berhasil ditambahkan, pada poin ini saya akan menampilkan semua data yang ada di dalam table tersebut. Dengan mengetikkan perintah berikut.

```
mysql> select * from data_barang;
+-----------+------------+--------------------+----------------+------------+------------+------+
| id_barang | kategori   | nama               | gambar         | harga_beli | harga_jual | stok |
+-----------+------------+--------------------+----------------+------------+------------+------+
|         1 | Elektronik | HP Samsung Android | hp_samsung.jpg |    2000000 |    2400000 |    5 |
|         2 | Elektronik | HP Xiaomi Android  | hp_xiaomi.jpg  |    1000000 |    1400000 |    5 |
|         3 | Elektronik | HP OPPO Andoid     | hp_oppo.jpg    |    1800000 |    2300000 |    5 |
+-----------+------------+--------------------+----------------+------------+------------+------+
// 3 rows in set (0.00 sec)
```

![MySQL - Select data from table data_barang](imgData/selectData.png)

# `CRUD PROGRAMS`

