<?php
    $connect = mysqli_connect('localhost', 'root', '', 'register');

    if (!$connect) {
        die('Error connect to DataBase');
    }