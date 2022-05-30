# Praktikum 10 (PHP OOP) - Pertemuan 11 - Pemrograman Web

<hr>

| Nama | Febro Herdyanto |
| --- | --- |
| NIM | 312010043 |
| Kelas | TI.20.B.1 |
| Mata Kuliah | Pemrograman Web |
| Dosen | Agung Nugroho,S.Kom.,M.Kom |

<hr>

Hi! Disini saya akan menjelaskan mengenai PHP OOP. Ikuti langkah langkah dibawah ini.

## `Define Class and Calling`

Disini saya membuat file baru dengan nama **mobil.php**, file ini berfungsi untuk mendefinisikan class pada PHP.

```
<?php
/**
* Program sederhana pendefinisian class dan pemanggilan class.
**/
class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    public function __construct(){
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "10000000";
    }
    public function gantiWarna ($warnaBaru){
        $this->warna = $warnaBaru;
    }
    public function tampilWarna (){
    echo "Warna mobilnya : " . $this->warna;
    }
}

// membuat objek mobil
$a = new Mobil();
$b = new Mobil();

// memanggil objek
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");
$a->tampilWarna();

// memanggil objek
echo "<br><b>Mobil kedua</b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();
?>
```

Hasil dari file tersebut akan seperti tampilan dibawah ini. <br>
![Image Data - Define Class and Calling it](imgData/defineClass.png)

## `Create Form using Class`

### `Class Form File`

Disini saya akan membuat class Form dengan file bernama **form.php**.

```
<?php
/**
* Nama Class: Form
* Deskripsi: CLass untuk membuat form inputan text sederhan
**/
class Form{
    private $fields = array();
    private $action;
    private $submit = "Submit Form";
    private $jumField = 0;

    public function __construct($action, $submit){
    $this->action = $action;
    $this->submit = $submit;
    }

    public function displayForm(){
        echo "<form action='".$this->action."' method='POST'>";
        echo '<table width="100%" border="0">';

        for ($j=0; $j<count($this->fields); $j++) {
            echo "<tr><td align='right'>".$this->fields[$j]['label']."</td>";
            echo "<td><input type='text' name='".$this->fields[$j]['name']."'></td></tr>";
        }

        echo "<tr><td colspan='2'>";
        echo "<input type='submit' value='".$this->submit."'></td></tr>";
        echo "</table>";
    }

    public function addField($name, $label){
        $this->fields [$this->jumField]['name'] = $name;
        $this->fields [$this->jumField]['label'] = $label;
        $this->jumField ++;
    }
}

?>
```

Kemudian saya akan membuat form input untuk memanggil class tersebut. Nama file **form_input.php**.

```
<?php
/**
* Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
**/
include "form.php";

echo "<html><head><title>Mahasiswa</title></head><body>";

$form = new Form("","Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";
?>
```

Hasil pada pemanggilan form Input akan menampilkan seperti gambar dibawah ini. <br>
![Image Data - Class Form and Input the Field](imgData/formInput.png)

Terima Kasih