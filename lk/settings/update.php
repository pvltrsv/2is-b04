<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

$title = "Настройки";
include('../../inc/head.php'); 
session_start(); //начинаем сессию
$user_login = $_SESSION['user_login'];
$user_id = $_SESSION['user_id'];
$user_email = $_SESSION['user_email'];

//data form
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


include('../../config/db_connect.php');

//zapros
$query = "UPDATE accounts SET email = '{$email}', firstname = '{$firstname}', lastname = '{$lastname}' WHERE id = '{$user_id}';";
$result = mysqli_query($db, $query);

//redirect в случае получения результата
if ($result) {
            include('../../inc/header.php');
            echo '<div class="login-ok">';
                echo '<h1><i class="fa-regular fa-circle-check"></i></h1>';
                $message = '<h3>Данные успешно обновлены.</h3>';
                echo $message;
            echo '</div>';
            header("Refresh: 2; URL = /lk/settings");
            include('../../inc/footer.php');
}else{
            include('../../inc/header.php');
            echo '<div class="login-err">';
                echo '<h1><i class="fa-regular fa-circle-xmark"></i></h1>';
                $message = '<h3>При обновлении данных произошла ошибка.</h3>';
                echo $message;
            echo '</div>';
            header("Refresh: 2; URL = /lk/settings");
            include('../../inc/footer.php');
}

?>