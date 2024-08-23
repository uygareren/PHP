<?php

// CURL (CLIENT URL)

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://www.patika.dev/tr");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

curl_close($curl);

$desen = '@<h2 class="emphasis-small-header bootcamp-card">(.*?)</h2>@'; // Added parentheses to capture the content between <h2> tags
preg_match_all($desen, $result, $sonuc);

?>

<ul>
    <?php foreach ($sonuc[1] as $value): ?>
        <li><?= $value ?></li>
    <?php endforeach; ?>
</ul>
