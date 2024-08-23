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

// ------------------ LIMIT -------------------------

// $query = $db -> query("SELECT * FROM users LIMIT 10");
// $users = $query -> fetchAll(PDO::FETCH_ASSOC);

// ------------------ WHERE -------------------------

// $query = $db -> query("SELECT * FROM users WHERE user_id = 5");
// $users = $query -> fetchAll(PDO::FETCH_ASSOC);

// ------------------ ORDER -------------------------

$query = $db -> query("SELECT * FROM users WHERE user_id < 15 ORDER BY age DESC");
$users = $query -> fetchAll(PDO::FETCH_ASSOC);



print_r($users);





?>
