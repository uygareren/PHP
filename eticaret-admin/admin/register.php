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
        <label>İsim:</label>
        <input type="text" name="name" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Şifre:</label>
        <input type="password" name="password" required><br>

        <label>Şifreyi Onayla:</label>
        <input type="password" name="confirm_password" required><br>

        <input type="submit" name="register" value="Kayıt Ol">
    </form>

    <p id="register">Zaten bir hesabınız var mı? <a href="login.php">Giriş yapın</a></p>
</body>
</html>
