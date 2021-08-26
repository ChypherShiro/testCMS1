<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erketai Bedding</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <?php wp_head(); ?>
    
</head>

<body>
    <div class="wrapper">
    <header class="header">
    <div class="header__container _container">
        <div class="icon-menu">
            <span></span>
        </div>
        <a href="#" class="header_logo"><img src="<?php bloginfo('template_directory') ?>/assets/img/erketai_img/logotest.png" alt=""></a>
        <div class="menu">

            <nav class="menu__body">
                <ul class="menu__list">
                <li><a href="<?= get_home_url();?>" class="menu__link _goto-block">Главная</a></li>
                    <li><a href="#store" class="menu__link _goto-block">Ассортимент</a></li>
                    <li><a href="#service" class="menu__link _goto-block">Наши услуги</a></li>
                    <!-- <li><a href="" class="menu__link _goto-block">????</a></li> -->
                    <li><a href="#footer" class="menu__link _goto-block">Контакты</a></li>
                </ul>
            </nav>
        </div>
        <div class="header__actions actions-header">
            
            <div class="actions-header__user user-header">

        
                <div style="display: none;" class="user-header__icon">
                    
                </div>
                
            </div>
        </div>
    </div>
    </header>