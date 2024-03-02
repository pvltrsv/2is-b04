<?php 

$server = $_SERVER['REMOTE_ADDR'];
$rrs = file_get_contents("http://api.sypexgeo.net/json/".$server);
$obj = json_decode($rrs);
$city = $obj->city->name_ru;

session_start(); //начинаем сессию
$user_login = $_SESSION['user_login'];
$user_id = $_SESSION['user_id'];
$user_email = $_SESSION['user_email'];
$login_time = $_SESSION['loginTime'];
$minutes = 1;

?>

<div class="info">
    <div class="geolocation">
        <i class="fa-solid fa-location-dot"></i> 
        <? echo "$city"; ?>
    </div>

    <div class="contacts">
        <a href="tel:88001234567">8 (800) 123-45-67</a>
        <a href="tel:88007654321">8 (800) 765-43-21</a>
    </div>
</div>

<header>
     <div class="menu">
        <button class="menu_btn" onclick="window.location.href = '/';"><i class="fa-solid fa-house"></i><br>Главная</button>
        <button class="menu_btn"><i class="fa-solid fa-percent"></i><br>Акции</button>
        <button class="menu_btn"><i class="fa-solid fa-circle-info"></i><br>О нас</button>


    <div class="logo">
        <img src="/content/logo.png"  onclick="window.location.href = '/';"/>
    </div>

        <button class="menu_btn"><i class="fa-solid fa-truck"></i><br>Оплата и доставка</button>
        <button class="menu_btn"><i class="fa-regular fa-circle-question"></i><br>Частые вопросы</button>
        <?php  
        if (!$user_login) {
            echo "<a href='/auth'><button class='menu_btn'><i class='fa-solid fa-user'></i><br>Личный кабинет</button></a>";
        }elseif ($user_login) {
            echo "<a href='/lk'><button class='menu_btn'><i class='fa-solid fa-user'></i><br>Личный кабинет</button></a>";
        }
        ?>
    </div>
</header>  