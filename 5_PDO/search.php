<?php

$dbname = "pdo_test";
$dbuser = "root";
$dbpass = '123456';
$dbhost = "localhost:3308";


try {

    $db = new PDO("mysql:host=" . $dbhost . ";dbname=" .$dbname, $dbuser, $dbpass);

  
    $db -> query('SET @@lc_time_names = tr_TR;');
    $db -> query('SET CHARACTER SET utf8mb4');
    $db -> query('SET CHARACTER_SET_CONNECTİON=utf8mb4');

} catch (PDOException $e) {
    echo "Database connection problem: " . $e -> getMessage();

}

echo "<pre>";

// ------------------ LIKE ---------------------------

$query = $db -> query("SELECT * FROM users");

print_r($users);





?>
