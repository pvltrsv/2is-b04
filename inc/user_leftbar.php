
<div class="user_leftbar">
    <div class="user_leftbar_card">
        <i class="fa-solid fa-circle-user"></i>
        <span>Welcome, <?php echo $user_login; ?>!</span>
    </div>
    <button onclick="window.location.href = '/lk';"><i class="fa-solid fa-circle-user"></i> Профиль</button>
    <button onclick="window.location.href = '/lk/cart';"><i class="fa-solid fa-cart-shopping"></i> Корзина</button>
    <button onclick="window.location.href = '/lk/offers';"><i class="fa-solid fa-list"></i> Заказы</button>
    <button onclick="window.location.href = '/lk/settings';"><i class="fa-solid fa-gear"></i> Настройки</button>
    <button onclick="window.location.href = '/logout';"><i class="fa-solid fa-right-from-bracket"></i> Выход</button>
</div>