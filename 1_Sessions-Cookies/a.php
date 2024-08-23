<?php

session_start();

if (isset($_SESSION['user']['name'])) {
    echo "Merhaba " . $_SESSION['user']['name'] . " " . $_SESSION["user"]["surname"] . "</br>";
    echo $_SESSION['user']['age'] . " Yaşındasın";
} else {
    echo "Please log in";
}

?>
