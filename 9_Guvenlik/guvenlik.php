<?php


require("config/config.php");


$q = $db -> query("SELECT * FROM user");
$users = $q -> fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";

print_r($users);