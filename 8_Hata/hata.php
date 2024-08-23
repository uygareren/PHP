<?php

class MyError extends Exception{

    public function Bomb(){
        echo $this -> message . "<br>";
        echo $this -> code . "<br>";
        echo $this -> file . "<br>";
        echo $this -> line . "<br>";
    }
}


// try {
    
//     throw new MyError("Bu bir hata mesajıdır!");
// } catch (MyError $e) {
//     echo $e -> Bomb();
// }


function errHandler($no, $msg, $file, $line){

    echo $no . "<br>";
    echo $msg . "<br>";
    echo $file . "<br>";
    echo $line . "<br>";
}

set_error_handler('errHandler', E_ALL);


echo $isim;