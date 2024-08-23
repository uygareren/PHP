
<?php

// XML
// XML Extensible Markup Language, Genişletilebilir Biçimlendirme Dili


// $kisiler = simplexml_load_file("kisiler.xml");


// echo "<pre>";
// print_r($kisiler);



header("Content-type: application/xml; charset='utf-8'"); // XML deklarasyonunu ekledik.

$xml = new SimpleXMLElement('<kisiler/>');

$kisi = $xml->addChild('kisi');
$xml->addChild('name', 'uygar');
$xml->addChild('surname', 'eren');
$xml->addChild('age', '25');

echo $xml->asXML();
?>
