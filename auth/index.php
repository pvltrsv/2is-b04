<!DOCTYPE html>
<html lang="en">
<?php 
    $title = "Авторизация";
    include('../inc/head.php'); 
?>
<body>
    <?php include('../inc/preloader.php'); ?>
    <?php include('../inc/header.php'); ?>
        <div class="login">
            <div class="login-form">
                <h4><a href="#" class="active">Авторизация</a> <a href="/register">Регистрация</a></h4>
                <form action="auth.php" method="POST">
                    <label>Логин</label>
                    <input type="text" name="login" id="login"><br>

                    <label>Пароль</label>
                    <input type="password" name="password" id="password"><br>

                    <button type="submit">Войти</button>
                </form>
                <?php echo $message; ?>
            </div>
        </div>
    <?php include('../inc/footer.php'); ?>
</body>
</html>

