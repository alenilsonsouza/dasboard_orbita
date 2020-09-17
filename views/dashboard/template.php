<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        <?php require 'partials/fonts.css'; ?>
    </style>
    <link rel="stylesheet" href="<?= BASE_CSS; ?>dashboard.css">
</head>

<body>
    <nav class="menu">
        <ul>
            <li class="ativo">
                <a href="">
                    <img src="<?= BASE_IMAGES; ?>dashboard/stats.svg" alt="stats">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?= BASE_IMAGES; ?>dashboard/facebook.svg" alt="Facebook">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?= BASE_IMAGES; ?>dashboard/instagram.svg" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?= BASE_IMAGES; ?>dashboard/setting.svg" alt="Configurações">
                </a>
            </li>
        </ul>
    </nav>
    <main class="principal">
        <header class="topo">
            <div class="logo">
                <a href="">
                    <img src="<?=BASE_IMAGES;?>dashboard/orbita.png" alt="">
                </a>
            </div>
            <div class="pesquisa">
                <form action="" method="post">
                <div class="areaInput">
                    <input type="search" name="" id="">
                    <button><img src="<?=BASE_IMAGES;?>dashboard/search.svg" alt=""></button>
                </div>
                </form>
                
            </div>
            <div class="datahora">
                <div class="data">15/09/2020</div>
                <div class="hora">00:00</div>
            </div>
            <div class="notificarion">
                <div class="areaNotify">
                    <img src="<?=BASE_IMAGES;?>dashboard/notification_button.svg" alt="">
                </div>
            </div>
            <div class="calendar">
                <img src="<?=BASE_IMAGES;?>dashboard/icone_calendar.svg" alt="">
            </div>
            <div class="user"></div>
        </header>
        <?php $this->loadViewInDashboard($viewName, $viewData); ?>
    </main>
</body>

</html>