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
                    <?php 
                        echo '<div class="login-err">';
                            echo '<h1><i class="fa-regular fa-circle-xmark"></i></h1>';
                            $message = '<h3>Введены неверные данные!</h3>';
                            echo $message;
                        echo '</div>';
                    ?>
                </div>
            </div>
    <?php include('../inc/footer.php'); ?>
</body>
</html>

