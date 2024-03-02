<!DOCTYPE html>
<html lang="en">
<?php 
    $title = "Настройки";
    include('../../inc/head.php');

?>
<body>
    <?php 
        include('../../inc/preloader.php');
        include('../../inc/header.php');  
        include('../../config/db_connect.php');
        if (!$user_login) {
            Header('Location: /');
        }

        $result = mysqli_query($db, "SELECT * FROM accounts WHERE id = '$user_id'");
        if ($row = mysqli_fetch_array($result)) {
            foreach($result as $row){
                $email = $row["email"];
                $firstname = $row["firstname"];
                $lastname = $row["lastname"];
            }
        }
    ?>

    <div class="settings">
        <div class="settings-form">
            <h2>Настройки</h2>
            <form action="update.php" method="POST">
                <label>Email</label>
                <input type="text" name="email" id="email" value="<?php echo $email; ?>">

                <label>Имя</label>
                <input type="text" name="firstname" id="firstname" value="<?php echo $firstname;?>" <? if ($firstname) { echo "disabled style='cursor: not-allowed;'"; }?>>

                <label>Фамилия</label>
                <input type="text" name="lastname" id="lastname" value="<?php echo $lastname;?>" <? if ($lastname) { echo "disabled style='cursor: not-allowed;'"; }?>>

                <button type="submit">Сохранить</button>
            </form>
        </div>
    </div>


    <?php include('../../inc/footer.php'); ?>
</body>
</html>