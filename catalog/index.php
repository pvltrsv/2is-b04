<!DOCTYPE html>
<html lang="en">
<?php 
    $title = "Каталог";
    include('../inc/head.php');

?>
<body>
    <?php 
        include('../inc/preloader.php');
        include('../inc/header.php');  
    ?>

    <div class="catalog">
        <h2>Каталог</h2>
        <div class="container">
            <?php include('../inc/catalog_leftbar.php'); ?>
            <div class="list-products">

            </div> 
        </div>
        
    </div>


    <?php include('../inc/footer.php'); ?>
</body>
</html>