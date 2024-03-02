<!DOCTYPE html>
<html lang="en">
<?php 
    $title = "Главная";
    include('inc/head.php'); 
?>
<body>
    <?php include('inc/preloader.php'); ?>
    <?php include('inc/header.php'); ?>

    <main>
    <div class="video-bg">
        <video autoplay muted loop pip="false">
            <source src="https://staging-cdn-cf.streamable.com/video/mp4/d2w3yz.mp4?Expires=1709409574500&Key-Pair-Id=APKAIEYUVEN4EVB2OKEQ&Signature=ECW9quu7t9-EP2h1vcvrpNsgO184mX3-7kC97MIMqGXhGtCtHRYwRmvu0AW074xCLA-bRmZGBQzBC0hFcNSabrfr9JkkEz8mFpUHqzAPMRe6SW-cvcOtMXpvINCj4lZBTo~B9WrX~iMeRWN6c4SxLEvFQdhkSRnqt9ciwzVC796jjU1hENgZVwcK0BlQ~d82hQHVKLFM7Rkgtri3w5SN4QZRVnSkHTKAMY92OVBWPdxqJhuAfsW6CedZby8V-PbM~KUJN8qYLaVvBzR0DgDNBTCvM0iB4w6xwHwVIJfw3F4chKRf9bS1rXc0U55FTsxbEBZURgl~Ecb1R0ju6-y9fg__" type="video/mp4"/>
        </video>
        <div class="effects"></div>
        <div class="video-bg_content">
            <h1>ПОЧУВСТВУЙТЕ АРОМАТ СПОКОЙСТВИЯ</h1>
            <h2>Мы любим хорошие и качественные горячие напитки, и эта любовь - залог качества нашей работы. Ведь так приятно делиться тем, что любишь.</h2>
            <button class="catalog"><i class="fa-solid fa-bars"></i> Перейти в каталог</button>
        </div>
    </div>
    </main>

    <div class="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" onclick="window.location.href = '/catalog';">
                    <img src="/content/slider-1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" onclick="window.location.href = '/catalog';">
                    <img src="/content/slider-2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" onclick="window.location.href = '/catalog';">
                    <img src="/content/slider-3.png" class="d-block w-100" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="map">
        <h2>Наше местоположение</h2>
        <p>
            <iframe id="map-canvas" class="map_part" width="600"  height="450"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=ru&amp;q=Колледж Оникс Пермь&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </p>
    </div>

    <div class="info-blocks">
        <div>
            <i class="fa-solid fa-truck-fast"></i>
            <h3>Быстрая доставка по всей России</h3>
            <h4>Крайний срок доставки с момента оформления заказа - 3 дня.</h4>
        </div>
        <div>
            <i class="fa-solid fa-hand-holding-dollar"></i>
            <h3>Доступные цены</h3>
            <h4>Прямые поставки сырья из стран-производителей сделали цены намного приятнее, чем в других компаниях.</h4>
        </div>
        <div>
            <i class="fa-regular fa-thumbs-up"></i>
            <h3>Качество продукции</h3>
            <h4>Мы работаем с экологически чистыми, премиальными сортами чая и кофе. Каждый сорт сертифицирован в соответствии всем требованиям.</h4>
        </div>
    </div>

    <?php include('inc/footer.php'); ?>
</body>
</html>