<!DOCTYPE html>
<html lang="en">
<?php 
    $title = "Регистрация";
    include('../inc/head.php'); 
?>
<body>
    <?php include('../inc/preloader.php'); ?>
    <?php include('../inc/header.php'); ?>
        <div class="register">
            <div class="register-form" id="register">
                <h4><a href="#" class="active">Регистрация</a> <a href="/auth">Авторизация</a></h4>
                <form action="register.php" method="POST" role="form">
                    <label>Логин</label>
                    <input type="text" name="user_login" id="user_login" required><br>

                    <label>Электронная почта</label>
                    <input type="email" name="email" id="email" required><br>

                    <label>Пароль</label>
                    <input type="password" name="password" id="password" required minlength="6"><br>

                    <button type="submit" class="btn-submit">Зарегистрироваться</button>
                </form>
                <p>В случае успешной регистрации вы будете перенаправлены на форму с авторизацией.</p>
            </div>
        </div>
    <?php include('../inc/footer.php'); ?>
</body>
</html>

