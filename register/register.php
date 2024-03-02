<?php 
$title = "Регистрация";
include('../inc/head.php'); 

//data form
$email = $_POST['email'];
$user_login = $_POST['user_login'];
$pass = $_POST['password']; 

include('../config/db_connect.php');

//zapros
$query = "INSERT INTO accounts (email, user_login, pass) VALUES ('$email', '$user_login', '$pass')";
$result = mysqli_query($db, $query);

//redirect в случае получения результата
if ($result) {
            include('../inc/header.php');
            echo '<div class="login-ok">';
                echo '<h1><i class="fa-regular fa-circle-check"></i></h1>';
                $message = '<h3>Вы успешно зарегистрировались.<br>Сейчас вы будете переадресованы на страницу авторизации. Если этого не произошло, перейдите по <a href="/auth">прямой ссылке</a>.</h3>';
                echo $message;
            echo '</div>';
            header("Refresh: 2; URL = /auth");
            include('../inc/footer.php');
}else{
            include('../inc/header.php');
            echo '<div class="login-err">';
                echo '<h1><i class="fa-regular fa-circle-xmark"></i></h1>';
                $message = '<h3>Произошла непредвиденная ошибка!</h3>';
                echo $message;
            echo '</div>';
            header("Refresh: 2; URL = /register");
            include('../inc/footer.php');
}

?>