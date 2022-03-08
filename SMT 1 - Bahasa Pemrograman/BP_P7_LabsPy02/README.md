# Pertemuan 7 - labspy02
Repository ini dibuat untuk memenuhi tugas Pertemuan 7 Bahasa Pemrograman (Modul Praktikum 2) - Teknik Informatika<br><br>
Nama : Febro Herdyanto<br>
NIM : 312010043<br>
Kelas : TI.20.B.1<br>
<hr>


### Menentukan Bilangan Terbesar dari 3 Nilai yang diinputkan

<br>
Pada Pertemuan ke-7 ini saya mendapat tugas dari Dosen Bahasa Pemrograman Teknik Infomratika - Universitas Pelita Bangsa yaitu Bapak. Agung Nugroho,S.Kom.,M.Kom. untuk membuat Aplikasi yang menentukan bilangaan terbesar dari tiga nilai yang client/user inputkan menggunakan Bahasa Pemrograman Python.<br><br>


Pada repository ini saya akan menjelaskan alur dalam *Flowchart* yang telah saya buat. File *Flowchat* bisa dilihat pada link berikut ini : [Flowchart Tugas Pertemuan 7 - Menentukan Bilangan Terbesar dari 3 Nilai yang diinputkan](Flowchart_Febro_Herdyanto_312010043.pdf) 
<br><br> 
Berikut source code yang saya tulis untuk menjadikan aplikasi tersebut.

``` python
print("Masukkan Pilihan Angka ke-1 : ")
xangka1 = int(input())
print("Masukkan Pilihan Angka ke-2 : ")
xangka2 = int(input())
print("Masukkan Pilihan Angka ke-3 : ")
xangka3 = int(input())

if (xangka1 > xangka2) and (xangka1 > xangka3):
    print(f"Bilangan Pertama ({xangka1}) lebih besar dari Bilangan kedua dan ketiga")
elif (xangka2 > xangka1) and (xangka2 > xangka3):
    print(f"Bilangan kedua ({xangka2}) lebih besar dari Bilangan pertama dan ketiga")
elif (xangka1 == xangka2) and (xangka1 == xangka3) and (xangka2 == xangka3):
    print("Bilangan yang dimasukkan sama besar")
else:
    print(f"Bilangan ketiga ({xangka3}) lebih besar dari Bilangan pertama dan kedua")
```

Saya tidak akan menjelaskan fungsi input dan print, karena sudah pernah saya jelaskan pada repository sebelumnya.<br>
Saya akan menjelaskan langkah-langkah nya :<br>

* Langkah pertama yaitu saya akan membuat sebuah inputan tersebut untuk menentukan angka terbesar. Yaitu dengan mengetikkan perintah / syntax berikut :<br>
``` python
print("Masukkan Pilihan Angka ke-1 : ")
xangka1 = int(input())
print("Masukkan Pilihan Angka ke-2 : ")
xangka2 = int(input())
print("Masukkan Pilihan Angka ke-3 : ")
xangka3 = int(input())
```
<br>

* Sesuai *flowchart* yang saya buat, client/user diminta untuk memasukan nilai inputan berupa angka dan akan disimpan kedalam variable xangka1, xangka2, dan xangka3. <br> 
Setelah proses input nilai selesai maka saya akan membuat pemilihan angka terbesar berdasarkan kondisi.<br>
<br> Pada kondisi pertama saya akan melakukan pengecekan terhadap Angka pertama (xangka1) terlebih dahulu, yaitu dengan syntax/source code seperti dibawah ini :<br>
``` python
if (xangka1 > xangka2) and (xangka1 > xangka3):
```
Pada syntax diatas dijelaskan bahwa terdapat dua pengecekan pada angka pertama, yaitu :<br>
   1. *(xangka1 > xangka2)* -> Apakah Angka pertama lebih besar dari Angka kedua **dan**
   2. *(xangka1 > xangka3)* -> Apakah Angka pertama lebih besar dari Angka ketiga.
<br>
Apabila jika pengecekan bersifat benar (Angka pertama lebih besar dari Angka kedua dan ketiga), maka system akan menampilkan output berupa :<br>

``` python
print(f"Bilangan Pertama ({xangka1}) lebih besar dari Bilangan kedua dan ketiga")
```

dan akan memumculkan hasil seperti berikut : **Bilangan Pertama ({xangka1}) lebih besar dari Bilangan kedua dan ketiga**<br>
<br>

* Jika dalam pengecekan ada yang salah atau Nilai pertama tidak lebih besar dari Nilai kedua dan ketiga, maka system melakukan pengecekan lanjutan ke fungsi **elif .........** yaitu dengan syntax atau source code berikut : <br>

``` python
elif (xangka2 > xangka1) and (xangka2 > xangka3):
```
Pada syntax diatas dijelaskan bahwa terdapat dua pengecekan pada angka kedua, yaitu : <br>
   1. *(xangka2 > xangka1)* -> Apakah angka kedua lebih besar dari angka pertama **dan**
   2. *(xangka2 > xangka3)* -> Apakah angka kedua lebih besar dari angka ketiga.
<br>
Apabila jika dalam pegecekan hasil bernilai benar (Angka kedua lebih besar dari angka pertama dan angka ketiga), maka system akan menampilkan output berupa :<br>

``` python
print(f"Bilangan kedua ({xangka2}) lebih besar dari Bilangan pertama dan ketiga")
```
dan akan menampilkan hasil seperti : **Bilangan kedua ({xangka2}) lebih besar dari Bilangan pertama dan ketiga**<br>
<br>

* Seperti langkah diatas, jika dalam pengecekan bersifat salah atau angka kedua lebih kecil dari angka pertama dan ketiga maka system akan melanjutkan ke pengecekan selanjutnya.<br>
Nah untuk pengecekan selanjutnya ini saya akan melakukan pengecekan berupa *Apakah Nilai yang inputnya nilainya sama besar?*.<br>
Untuk membuat pengecekan kondisi tersebut, dengan syntax/source code berikut :<br>

``` python
elif (xangka1 == xangka2) and (xangka1 == xangka3) and (xangka2 == xangka3):
```

Pada syntax diatas, dijelaskan terdapat tiga pengecekan pada semua variable, yaitu :<br>
   1. *(xangka1 == xangka2)* -> Apakah angka pertama sama besar dengan angka kedua **dan**
   2. *(xangka1 == xangka3)* -> Apakah angka pertama sama besar dengan angka ketiga **dan**
   3. *(xangka2 == xangka3)* -> Apakah angka kedua sama besar dengan angka ketiga.
<br>
Apabila setelah dilakukan pengecekan dan ternyata semua angka sama besar, maka system akan menampilkan output dengan perintah berikut :<br>

``` python
print("Bilangan yang dimasukkan sama besar")
```

Dari syntax diatas akan memunculkan hasil berupa : **Bilangan yang dimasukkan sama besar**<br>

* Langkah terakhir adalah kita system sudah memproses untuk meakukan pengecekan pada If, Elif maka system harus menentukan pilihan terakhir dengan menggunakan fungsi **else**. <br>
Fungsi else menurut saya adalah kondisi dimana sistem telah melakukan pengecekan pada fungsi if dan elif tetapi tidak ada hasil yang diinginkan, maka menentukan pilihan akhir, yaitu dengan hanya menampilkan output yang diinginkan.<br>
Pada kasus ini program ini, saya melakukan pengecekan kondisi seperti berikut :

> Pengecekan pertama pada **xangka1** apakah lebih besar, jika tidak maka melakukan pengecekan pada **xangka2** apakah lebih besar, jika masih belum menemukan hasil atau tidak lebih besar, dilakukan pengecekan berupa semua bilangan sama besar. Nah untuk lagkah terakhir maka memampilkan hasil bahwa bilangan ketiga pasti bilangan terbesar.
<br>

Untuk menampilkan hasil akhir, maka hanya dengan nengetikkan syntax sebagai berikut :<br>

``` python
else:
    print(f"Bilangan ketiga ({xangka3}) lebih besar dari Bilangan pertama dan kedua")
```

Pada syntax diatas akan menampilkan hasil berupa : **Bilangan ketiga ({xangka3}) lebih besar dari Bilangan pertama dan kedua**<br>
<br>

Berikut hasil *Screenshot* dari Program yang saya buat :<br>
1. Saya akan mencoba melakukan inputan dengan angka terbesar ada di inputan pertama<br>
   ![Program Angka Terbesar 1](pict/angka1.PNG)
   <br>
2. Saya akan mencoba melakukan inputan dengan angka terbesar ada di inputan kedua<br>
   ![Program Angka Terbesar 2](pict/angka2.PNG)
   <br>
3. Saya akan mencoba melakukan inputan dengan angka sama besar<br>
   ![Program Inputan sama besar](pict/samabesar.PNG)
   <br>
4. Saya akan mencoba melakukan inputan dengan angka terbesar ada di inputan ketiga<br>
   ![Program Inputan Terbesar 3](pict/angka3.PNG)
   <br>

<hr>
Demikianlah langkah-langkah untuk melakukan pengecekan pada 3 inputan dengan bahasa pemrograman python.<br>
Untul lebih jelasnya bisa membaca *Flowchart* yang telah saya buat (link diatas) 
<hr>
Demikian Tugas Pertemuan 7 - Praktikum 2 telah selesai. Terima kasih.<br>


NAMA : FEBRO HERDYANTO =<br>
NIM : 312010043<br>
KELAS : TI.20.B.1<br>
