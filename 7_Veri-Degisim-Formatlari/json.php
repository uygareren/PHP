<?php


/* JSON

JSON veri depolama ve veri alışverişi için kullanılan bir formattır.
JSON .json uzantılı dosyalarda tutulabilir.
JSON formatı,benzer fonksiyonlara sahip olan XML‘e (ing) daha basit ve hafif bir alternatiftir.
Veriler Anahtar-Değer şeklinde tutulur.
Bir JSON nesnesi {} küme parantezleriyle başlar ve biter.
İçinde iki veya daha fazla anahtar/değer çiftlerine sahip olabilir ve bu ikisini bir virgül ile ayırır.
Anahtar ve değerler : ile ayrılır {'isim': 'Şahin'} .


LİSTEYİ JSON OBJESİNE ENCODE ETME İŞLEMİ

echo json_encode([
    "name" => "uygar",
    "surname" => "eren",
    "age" => 28
    ]);


OBJEYİ LİSTEYE ÇEVİRME İŞLEMİ;

$obj = file_get_contents("kisi.json");
$array = json_decode($obj, true);

echo "<pre>";

print_r($array);

*/







?>  


