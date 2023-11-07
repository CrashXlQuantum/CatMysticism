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
    <title>Реєстрація</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Ім'я Прізвище</label>
        <input type="text" name="full_name" placeholder="Введіть ім'я та прізвище">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Email</label>
        <input type="email" name="email" placeholder="Введіть свій адрес ел. пошти">
        <label>Фото профіля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Придумайте пароль">
        <label>Підтвердження паролю</label>
        <input type="password" name="password_confirm" placeholder="Введіть пароль повторно">
        <button type="submit">Зареєструватися</button>
        <p>
            У вас вже є акаунт? - <a href="avtor.php" style="color: #C84B53;">авторизуйтеся</a>!
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