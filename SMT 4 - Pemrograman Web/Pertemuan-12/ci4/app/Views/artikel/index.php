<?= $this->include('template/header'); ?>

<div class="col-sm-8">
<?php 
if($artikel): foreach($artikel as $row): ?>

    <article class="entry">
        <h2><a href="<?= $row['slug'];?>"><?= $row['judul']; ?></a></h2>
        <img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?= $row['judul']; ?>">
        <p><?= substr($row['isi'], 0, 200); ?></p>
    </article>

    <hr class="divider">

    <?php endforeach; else: ?>
    
        <article class="entry">
            <h2>Belum ada Data.</h2>
        </article>
    <?php endif; ?>

</div>
<?= $this->include('template/footer'); ?>