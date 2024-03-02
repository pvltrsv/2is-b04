<?php
$title = "Авторизация";
include('../inc/head.php'); 
if (isset($_POST['login'])) {
    session_start(); //начинаем сессию

    $login = $_POST['login'];
    $pass = $_POST['password'];

    include('../config/db_connect.php');

    $result = mysqli_query($db, "SELECT * FROM accounts WHERE user_login = '" . $login . "' and pass = '" . $pass . "'");
    if (!empty($result)) {
        if ($row = mysqli_fetch_array($result)) {
            include('../inc/header.php');

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_login'] = $row['user_login'];
            $_SESSION['user_email'] = $row['email'];
            ?>
            <div class="login">
                <div class="login-form">
                    <?php 
                        echo '<div class="login-ok">';
                            echo '<h1><i class="fa-regular fa-circle-check"></i></h1>';
                            $message = '<h2>Вы успешно авторизовались.</h2><br<h3>Сейчас вы будете переадресованы в личный кабинет.<br>Если этого не произошло, перейдите по <a href="/lk">прямой ссылке</a>.</h3>';
                            echo $message;
                        echo '</div>';
                    ?>
                </div>
            </div>
            <?
            header("Refresh: 2; URL = /lk");
            include('../inc/footer.php');
        }else{
            include('../inc/header.php');
            ?>
            <div class="login">
                <div class="login-form">
                    <?php 
                        echo '<div class="login-err">';
                            echo '<h1><i class="fa-regular fa-circle-xmark"></i></h1>';
                            $message = '<h3>Введены неверные данные!</h3>';
                            echo $message;
                        echo '</div>';
                    ?>
                </div>
            </div>
            <?
            header("Refresh: 2; URL = /auth");
            include('../inc/footer.php');
        }
    } else {
        mysqli_close($db);
    }
}

?>

<!-- include('../config/db_connect.php'); -->