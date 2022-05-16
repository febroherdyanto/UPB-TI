<h2>Kondisi Switch</h2>

<?php
    $nama_hari = date("l");
    switch ($nama_hari) {
        case "Sunday":
            echo "Hari Minggu";
            break;
        case "Monday":
            echo "Hari Senin";
            break;
        case "Tuesday":
            echo "Hari Selasa";
            break;
        default:
            echo "Hari Sabtu";
        }
?>

<div> <br> <br>
    <span style="background-color:#1d1d1d; padding:3px; color:#eee; border-radius:5px; "> &nbsp; &nbsp; &nbsp; <i>Created by. Febro Herdyanto (312010043)</i> &nbsp; &nbsp; &nbsp;</span>
</div>