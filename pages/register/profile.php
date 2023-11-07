<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: avtor.php');
}
?>

<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мій профіль</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body style="background-image: url('../../img/background-profile.gif'); background-size: cover; background-position: center; background-attachment: fixed;">
    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="300" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
            <br>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
                    <br>
                <button class="logout-button"><a href="vendor/logout.php"> Вийти з акаунту</a></button>
                    <br>
                <button class="return-button"><a href="../../avsite/index.html">Повернутись</a></button>
    </form>
</body>
</html>