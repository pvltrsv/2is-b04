<!DOCTYPE html>
<html lang="en">
<?php 
    $title = "Личный кабинет";
    include('../inc/head.php');

?>
<body>
    <?php 
        include('../inc/preloader.php');
        include('../inc/header.php');  

        if (!$user_login) {
            Header('Location: /');
        }
    ?>

    <div class="profile">
        <h2>Личный кабинет</h2>
        <?php
            include('../inc/user_leftbar.php');
        ?>
    </div>


    <?php include('../inc/footer.php'); ?>
</body>
</html>