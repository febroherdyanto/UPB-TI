<h2>Kondisi IF</h2>

<?php
    $nama_hari = date("l");

    if ($nama_hari == "Sunday") {
        echo "Minggu";
    } elseif ($nama_hari == "Monday") {
        echo "Senin";
    } else {
        echo "Selasa";
    }
?>

<div> <br> <br>
    <span style="background-color:#1d1d1d; padding:3px; color:#eee; border-radius:5px; "> &nbsp; &nbsp; &nbsp; <i>Created by. Febro Herdyanto (312010043)</i> &nbsp; &nbsp; &nbsp;</span>
</div>