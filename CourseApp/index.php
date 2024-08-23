<?php require_once('_config.php')?>
<?php include('views/_header.php')?>
<?php include('views/_navbar.php')?>

<?php

    $kategori_query = mysqli_query($baglanti, "SELECT * FROM kategori");
    $kurs_query = mysqli_query($baglanti, "SELECT * FROM kurs");

    $kategoriler = mysqli_fetch_all($kategori_query, MYSQLI_ASSOC);
    $kurslar = mysqli_fetch_all($kurs_query, MYSQLI_ASSOC);

    mysqli_close($baglanti)



?>

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                <?php include('views/_category.php')?>
            </div>
        </div>

        <div class="col-md-9">
            <?php foreach ($kurslar as $kurs) : ?>
                <?php if($kurs['onay'] and $kurs['anasayfa']): ?>
                    <?php include('views/_kurs.php')?>
                <?php endif; ?>  
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include('views/_footer.php')?>
