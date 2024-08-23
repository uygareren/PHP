<?php


//date_default_timezone_set()   => hangi ikamete göre zamanın belirlenceğini belirtilir.
//date_default_timezone_set()   => hangi ikamete göre zamanın belirlenceğini belirtilir.
//date_default_timezone_set()   => hangi ikamete göre zamanın belirlenceğini belirtilir.
//date_default_timezone_set()   => hangi ikamete göre zamanın belirlenceğini belirtilir.

date_default_timezone_set("Europe/Istanbul");
//    $format = 'Y-m-d H:i:s';   =>  2023-07-20 11:46:11
// $format = "j";    => 20  (günü tek haneli verir)
// $format = "y";      => 23 (yılı iki haneli verir)
//$format = "l F z";     Thursday July 200 (günün 200. günüymüş)



// Yabancı tarih isimleri türkçe isimlere çevirmeye yarayan fonksiyon yazalım..

function _date($dayname, $monthname){
    $days_array = [
        "Monday" => "Pazartesi",
        "Tuesday" => "Salı",
        "Wednesday" => "Çarşamba",
        "Thursday" => "Perşembe",
        "Friday" => "Cuma",
        "Saturday" => "Cumartesi",
        "Sunday" => "Pazar"
    ];
    
    $months_array = [
        "January" => "Ocak",
        "February" => "Şubat",
        "March" => "Mart",
        "April" => "Nisan",
        "May" => "Mayıs",
        "June" => "Haziran",
        "July" => "Temmuz",
        "August" => "Ağustos",
        "September" => "Eylül",
        "October" => "Ekim",
        "November" => "Kasım",
        "December" => "Aralık"
    ];

    // Eğer $dayname verisi $days_array dizisinde bulunuyorsa Türkçe değerini döndür
    if (array_key_exists($dayname, $days_array)) {
        $turkish_dayname = $days_array[$dayname];
    } else {
        $turkish_dayname = "Bilinmeyen Gün"; // Eğer eşleşme yoksa varsayılan değer
    }

    // Eğer $monthname verisi $months_array dizisinde bulunuyorsa Türkçe değerini döndür
    if (array_key_exists($monthname, $months_array)) {
        $turkish_monthname = $months_array[$monthname];
    } else {
        $turkish_monthname = "Bilinmeyen Ay"; // Eğer eşleşme yoksa varsayılan değer
    }

    return $turkish_dayname . " " . $turkish_monthname;
}

$day_name = date("l");
$month_name = date("F");


echo _date($day_name, $month_name);
echo "<br>";


// ------ TİME ------

echo time();
echo "<br>";    
echo strtotime("now");






?>
