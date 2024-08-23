<?php

$dbname = "pdo_test";
$dbuser = "root";
$dbpass = '';
$dbhost = "127.0.0.1";


try {

    $db = new PDO("mysql:host=" . $dbhost . ";dbname=" .$dbname, $dbuser, $dbpass);

  

} catch (PDOException $e) {
    echo "Database connection problem: " . $e -> getMessage();

}

echo "<pre>";


$query = $db -> query("SELECT * FROM users WHERE age NOT IN (20,21,22,23,24)");
$users = $query -> fetchAll(PDO::FETCH_ASSOC);

print_r($users);




?>
