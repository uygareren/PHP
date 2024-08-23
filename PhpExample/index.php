<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulus Check</title>
</head>
<body>
    <?php
    function checkModulus($number) {
        if ($number === "") {
            echo "Girilen değer boş olamaz.";
        } else {
            $modulus = $number % 3;
            if ($modulus === 0) {
                echo "Girdiğiniz sayı 3'e tam bölünür.";
            } else {
                $nextMultiple = ceil($number / 3) * 3;
                echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı " . $nextMultiple . "'dır.";
            }
        }
    }

    if (isset($_POST['submit'])) {
        $inputNumber = $_POST['number'];
        checkModulus($inputNumber);
    }
    ?>

    <form action="" method="POST">
        <label for="number">Sayı Girin:</label>
        <input type="number" name="number" required>
        <button type="submit" name="submit">Kontrol Et</button>
    </form>
</body>
</html>
