<?php


try {
    $db = new PDO("mysql:host=localhost; dbname=pdo_test");

    $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db -> query('SET @@lc_time_names = tr_TR;');
    $db -> query('SET CHARACTER SET utf8mb4');
    $db -> query('SET CHARACTER_SET_CONNECTİON=utf8mb4');


} catch (PDOException $e) {
    echo $e -> getMessage();
}

?>