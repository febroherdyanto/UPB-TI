# Tugas Pemrograman Web - Pertemuan 6 - Javascript

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
| 1 | Membuat Box Element | [Click Here](#membuat-box-element) |
| 2 | Menambahkan CSS Float Property | [Click Here](#menambahkan-css-float-property) |
| 3 | Mengatur Clearfix Element | [Click Here](#mengatur-clearfix-element) |


## `Uraian Tugas`

Halo semua!. Kali ini saya akan menjelaskan beberapa syntax HTML dengan Javascript, sesuai dengan perintah Dosen yang mengampu Mata Kuliah Pemrograman Web.

### `Pengenalan document.write dan console.log`

Materi pertama yang akan saya buat adalah pengenalan **document.write** dan **console.log**. Langkah pertama yang saya lakukan adalah membuat file baru dengan nama **lab5_javascript.html** dan memberikan code HTML dan Javascript yang telah saya buat.

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengenal Javascript</title>
</head>
<body>

    <h1>Pengenalan Javascript</h1>
    <h3>Contoh document.write dan console.log</h3>

    <script type="text/javascript">
        document.write("Hello World");
        console.log("Hello World");
    </script>

</body>
</html>
```

Setelah file **lab5_javascript.html** saya simpan, dan akan menampilkan output seperti dibawah ini. <br>
![Define Document Write and Console Log on Javascript](imgData/documentWrite%26consoleLog.png)

### `Javascript Dasar`

#### `Javascript Alert`

Pada point ini saya akan menjelaskan mengenai Javascript Window Alert yang akan muncul pada browser. Saya akan membuat file baru dengan nama **js_alert.html**. Code yang akan saya buat adalah seperti berikut. 

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert Box</title>
</head>
<body>
    
    <script language="javascript">
        <!--
            window.alert("Febro Herdyanto \nIni merupakan pesan untuk Anda !");
        //-->
    </script>

</body>
</html>
```

Hasil dari code tersebut akan memberikan output sebagai berikut. <br>
![Window Alert on Javascript HTML files](imgData/jsAlert.png)

#### `Javascript Method`

Kali ini saya akan menjelaskna mengenai Javascript method. Saya akan membuat file baru dengan nama **jsMethod.html**. Dan beberikan source code HTML dan Javascript sebagai berikut.

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script Javascript</title>
</head>
<body>

    Percobaan memakai Javascript. <br>

    <script type="text/javascript">
        <!--
            document.write("Selamat mecoba Javascript <br>");
            document.write("Semoga Sukses!");
        //-->
    </script>

</body>
</html>
```

Hasil dari source code diatas akan beberikan output sebagai berikut. <br>
![Javascript Method on Object](imgData/jsMethod.png)

#### `Pemakaian Prompt`

Poin ini saya akan membuat file HTML baru dengan nama **jsPrompt.html** guna untuk menjelaskan beberapa pemakaian Prompt pada Javascript. Dan source code yang saya masukkan adalah sebagai berikut. 

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemasukan Data</title>
</head>
<body>

    <script type="text/javascript">
        var nama = prompt("Siapa nama Anda?", "Masukkan nama Anda");
        document.write("Hai, " + nama + "!");
    </script>
</body>
</html>
```

Hasil ketika pertama kali saya me-load halaman tersebut akan menampilkan Alert untuk user memasukkan nama. <br>
![Javascript Prompt Start on HTML Files](imgData/jsPrompt-1.png) <br>
Setelah saya memasukkan nama **Febro Herdyanto** pada prompt tersebut, akan menampilkan halaman dengan isian : <br>
![javascript Prompt Output on HTML Files](imgData/jsPrompt-2.png)

#### `Pembuatan Fungsi dan Cara Pemanggilannya`

Point ini saya akan membuat fungsi dan memanggil lewat body onload. Saya membuat file baru dengan nama **jsFunction.html** dan memberikan source code seperti berikut.

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Program Javascript</title>
    <script type="text/javascript">
        function pesan(){
            alert("Memanggil Javascript lewat Body onload");
        }
    </script>
</head>
<body onload=pesan()>
    
</body>
</html>
```

Hasil dari source code tersebut adalah seperti gambar dibawah ini. <br>
![Javascript Function Body Onload Proccess](imgData/jsFunction.png)

<hr>

### `Dasar Pemrograman di Javascript`

#### `Operasi Dasar Aritmatika`

Didalam Javascript juga bisa digunakan untuk menghitung operasi dasar aritmatika. Disini saya akan mencobanya, dengan membuat file baru dengan nama **jsAritmatika.html** dan memberikan source code seperti berikut.

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Program Javascript</title>
    <script type="text/javascript">
        function test (val1, val2){
            document.write("<br>"+"Perkalian : val1*val2 "+"<br>");
            document.write(val1*val2);
            document.write("<br>"+"Pembagian : val1/val2 "+"<br>");
            document.write(val1/val2);
            document.write("<br>"+"Penjumlahan : val1+val2 "+"<br>");
            document.write(val1+val2);
            document.write("<br>"+"Pengurangan : val1-val2 "+"<br>");
            document.write(val1-val2);
            document.write("<br>"+"Modulus : val1%val2 "+"<br>");
            document.write(val1%val2);
        }
    </script>
</head>
<body>
    
    <input type="button" name="button1" value="arithmetic" onclick="test(9,4)">
    
</body>
</html>
```

Hasil dari source tersebut, pertama kali akan menampilkan sebuah button. <br>
![Javascript Arithmetic on HTML with Button](imgData/jsAritmatika-1.png) <br>
Ketika button tersebut di klik akan menampilkan output seperti berikut. <br>
![JJavascript Arithmetic on HTML with Button output](imgData/jsAritmatika-2.png)