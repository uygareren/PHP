<?php require_once('_config.php')?>
<?php include('views/_header.php')?>
<?php include('views/_navbar.php')?>

<?php
    $id = $_GET['id']; // Varsayalım ki id parametresi URL'den alınıyor.

    $kategori_query = mysqli_query($baglanti, "SELECT * FROM kategori");

    if (!empty($id)) {
        $kurs_query = mysqli_query($baglanti, "SELECT * FROM kurs WHERE id = '$id'");
    } else {
        echo "id parametresi eksik veya geçersiz.";
    }


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
                <?php include('views/_kurs-detay.php')?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include('views/_footer.php')?>
