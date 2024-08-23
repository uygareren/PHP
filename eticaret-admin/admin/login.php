<?php

session_start();

if(isset($_SESSION['auth'])){

    header("Location: index.php");
    $_SESSION['message'] = "You're already logged in!";
    exit();
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Sayfası</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <form method="post" action="../functions/authcodes.php">
        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Şifre:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="login" value="Giriş Yap">
    </form>

    <p id="register">Henüz bir hesabınız yok mu? <a href="register.php">Kayıt olun</a></p>
    
    
</body>
</html>
