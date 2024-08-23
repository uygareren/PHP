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

// ------------------------- MIN ------------------------------------

// $query = $db -> query("SELECT MIN(age), name, email  FROM users");
// $users = $query -> fetchAll(PDO::FETCH_ASSOC);


// ------------------------- MAX ------------------------------------

// $query = $db -> query("SELECT MAX(age), name, email  FROM users");
// $users = $query -> fetchAll(PDO::FETCH_ASSOC);


// ------------------------- COUNT ------------------------------------

$query = $db -> query("SELECT COUNT(user_id), age FROM users GROUP BY age HAVING age > 26 ");
$users = $query -> fetchAll(PDO::FETCH_ASSOC);


print_r($users);





?>
