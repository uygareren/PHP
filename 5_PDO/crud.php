<?php

$dbname = "pdo_test";
$dbuser = "root";
$dbpass = '123456';
$dbhost = "localhost:3308";


try {

    $db = new PDO("mysql:host=" . $dbhost . ";dbname=" .$dbname, $dbuser, $dbpass);

    // ------------------------SELECT---------------------------

    // $select = $db -> query("SELECT * FROM users");
    // $users = $select -> fetchAll(2);

    // echo "<pre>";
    // print_r($users);


    // ------------------------UPDATE---------------------------

    // $update = $db -> query("UPDATE users SET name= 'UYGARR' WHERE user_id = 1");

    // if($update){
    //     echo "Güncellendi";
    // }else{
    //     echo "Hata oluştu!";
    // }


    // ------------------------DELETE---------------------------


    // $delete = $db -> query("DELETE FROM users WHERE user_id = 2");

    // if($delete){
    //     echo "Silme başarılı";
    // }else{
    //     echo "Silme başarısız";
    // }


    // ------------------------INSERT---------------------------

    // $insert = $db -> query("INSERT INTO users(`name`, `phone`, `city`, `email`, `age`) VALUES('kıvanç', 59219943, 'İzmir', 'uygar@gmail.com', 28)");

    // if($insert){
    //     echo "Insert başarılı";
    // }else{
    //     echo "Insert Başarısız";
    // }

    // SQL GÜVENLİK AÇISINDAN KULLANIMI

    $q = $db -> prepare("INSERT INTO users(`name`, `phone`, `city`, `email`, `age`) VALUES(?, ?, ?, ?, ?)");

    $insert = $q -> execute(['Reşit', 88888888, "kastamonu", "sdsds@gmail.com", 77]);

    if($insert){
        echo "Execute başarılı";
    }else{
        echo "Execute başarısız";
    }

    echo "<br>";

    if($rows = $q->rowCount()){
        echo $db -> lastInsertId();
        echo "<br>";
        echo $rows. "Satır eklendi!";
    }

  

} catch (PDOException $e) {
    echo "Database connection problem: " . $e -> getMessage();

}

?>
