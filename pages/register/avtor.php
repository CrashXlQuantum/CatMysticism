<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизація</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <!--форма авторизації-->

    <form action="vendor/signin.php" method="post">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть свій пароль">
        <button type="submit">Увійти</button>
        <p>
            У вас немає акаунту? - <a href="register.php" style="color: #C84B53;">зареєструйтеся</a>!
            <br>
            <br>
            <a href="../../index.html" style="color: #C84B53;">Повернутися</a>
        </p>
        <?php
            if($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
    
</body>
</html>