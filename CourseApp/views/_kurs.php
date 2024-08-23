<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo 'img/'.$kurs["resim"]; ?>" class="img-fluid rounded-start" alt="image">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="kurs-detay.php?id=<?php echo $kurs['id'];?>">
                        <?php echo $kurs["baslik"]; ?>
                    </a>
                </h5>
                <p class="card-text"><?php echo $kurs["aciklama"]; ?></p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
