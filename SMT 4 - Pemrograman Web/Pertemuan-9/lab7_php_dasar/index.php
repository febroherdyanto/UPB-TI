<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan dan Tugas Pertemuan 9</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1><i class="fa fa-list"></i> Form Data Karyawan</h1>
            </div>
        </div>
        <hr>

        <form method="POST" action="">

        <div class="row">
            <div class="col-sm-3">
                <label><i class="fa fa-user"></i> Nama Lengkap</label>
            </div>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <label><i class="fa fa-calendar"></i> Tanggal Lahir</label>
            </div>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="tgllahir">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <label><i class="fa fa-briefcase"></i> Pekerjaan</label>
            </div>
            <div class="col-sm-5">
                <select class="form-select form-control" name="pekerjaan">
                    <option value="kosong" selected>Pilih Pekerjaan</option>
                    <option value="fullstack">Full Stack Developer</option>
                    <option value="frontend">Front End Developer</option>
                    <option value="backend">Back End Developer</option>
                    <option value="network">Network Engineer</option>
                    <option value="security">Security Engineer</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
            </div>
        </div>
        </form>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tgllahir = $_POST['tgllahir'];
    $pekerjaan = $_POST['pekerjaan'];

    $pisahtgl = explode('-',$tgllahir);
        $tahunlahir = $pisahtgl[0];
        $bulan = $pisahtgl[1];
        $tgl = $pisahtgl[2];
    
    $tahunini = date('Y');
    $hitungumur = $tahunini - $tahunlahir;

    if($pekerjaan == 'kosong'){
        $kerja = "Anda tidak memilih pekerjaan";
        $gaji = 0;
    }else if($pekerjaan == 'fullstack'){
        $kerja = "Full Stack Developer";
        $gaji = "12.000.000";
    }else if($pekerjaan == 'frontend'){
        $kerja = "Front End Developer";
        $gaji = "9.000.000";
    }else if($pekerjaan == 'backend'){
        $kerja = "Back End Developer";
        $gaji = "10.000.000";
    }else if($pekerjaan == 'network'){
        $kerja = "Network Engineer";
        $gaji = "7.500.000";
    }else if($pekerjaan == 'security'){
        $kerja = "Security Engineer";
        $gaji = "8.500.000";
    }else{
        $kerja = "Anda tidak memilih pekerjaan / sedang tidak bekerja";
        $gaji = 0;
    }

    echo "<br><hr><br>";
    echo "<h2>Hasil : </h2>\n";
    echo '<table class="table table-hover table-bordered">
                <thead style="background-color: #c3c6c9">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>Pekerjaan</th>
                        <th>Gaji</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>'.$nama.'</td>
                        <td>'.$tgllahir.'</td>
                        <td>'.$hitungumur.' Tahun</td>
                        <td>'.$kerja.'</td>
                        <td>Rp. '.$gaji.'</td>
                    </tr>
                </tbody>
            </table>';

}

?>

</div>
</body>
</html>