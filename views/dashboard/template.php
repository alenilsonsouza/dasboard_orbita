<?php
$u = new Usuarios($_SESSION['plogin']);
?>
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
    <script>
        var BASE_URL = '<?=BASE_URL;?>';
    </script>
</head>

<body>
    <nav class="menu">
        <ul>
            <li class="<?=($viewData['page']=='dashboard')?'ativo':''?>">
                <a href="<?=BASE_URL;?>dashboard">
                    <img src="<?= BASE_IMAGES; ?>dashboard/stats.svg" alt="stats">
                </a>
            </li>
            <li class="<?=($viewData['page']=='facebook')?'ativo':''?>">
                <a href="<?=BASE_URL;?>facebook">
                    <img src="<?= BASE_IMAGES; ?>dashboard/facebook.svg" alt="Facebook">
                </a>
            </li>
            <li class="<?=($viewData['page']=='instagram')?'ativo':''?>">
                <a href="<?=BASE_URL;?>instagram">
                    <img src="<?= BASE_IMAGES; ?>dashboard/instagram.svg" alt="Instagram">
                </a>
            </li>
            <li class="<?=($viewData['page']=='configuracoes')?'ativo':''?>">
                <a href="<?=BASE_URL;?>configuracoes">
                    <img src="<?= BASE_IMAGES; ?>dashboard/setting.svg" alt="Configurações">
                </a>
            </li>
        </ul>
    </nav>
    <main class="principal">
        <header class="topo">
            <div class="logo">
                <a href="">
                    <img src="<?= BASE_IMAGES; ?>dashboard/orbita.png" alt="">
                </a>
            </div>
            <div class="pesquisa">
                <form action="" method="post">
                    <div class="areaInput">
                        <div class="campo">
                            <input type="search" name="" id="" placeholder="O que você está buscando?">
                            <button><img src="<?= BASE_IMAGES; ?>dashboard/search.svg" alt=""></button>
                        </div>

                    </div>
                </form>

            </div>
            <div class="datahora" id="datahora">
                <div class="data"><?=date('d/m/Y');?></div>
                <div class="hora"><?=date('H:i');?></div>
            </div>
            <div class="notification">
                <div class="areaNotify">
                    <div class="notify">0</div>
                    <img src="<?= BASE_IMAGES; ?>dashboard/notification_button.svg" alt="">
                </div>
            </div>
            <div class="calendar">
                <img src="<?= BASE_IMAGES; ?>dashboard/icone_calendar.svg" alt="">
            </div>
            <div class="user">
                <div class="user--avatar">
                    <div class="avatar"></div>
                </div>
                <div class="user--name">
                    <?=$u->getNome();?>
                </div>
            </div>
            <div class="setting">
                <a href="<?=BASE_URL;?>dashboardLogin/sair" class="button" title="Sair do sistema">Sair</a>
                
            </div>
        </header>
        <?php $this->loadViewInDashboard($viewName, $viewData); ?>
    </main>
    <script src="<?=BASE_SCRIPT;?>Controllers/DataHora.js"></script>
</body>

</html>