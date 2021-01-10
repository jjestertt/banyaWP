<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Дом Баня</title>
    <!-- animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- //animation -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/media.css">
</head>

<body>
    <!-- heeader -->
    <header class="header" id="header">
        <div class="container">
            <div class="header__wrapper">
                <a href="#" class="header__logo">
                    <img src="<?php the_field('header__logo'); ?>" alt="logo" class="header__img">
                </a>
                <nav class="header__nav">
                    <ul class="header__menu-list">
                        <li class="header__menu-item"><a href="#about" class="header__menu-link scroll-to">О нас</a>
                        </li>
                        <li class="header__menu-item"><a href="#galery" class="header__menu-link scroll-to">Галерея</a>
                        </li>
                        <li class="header__menu-item"><a href="#contact"
                                class="header__menu-link scroll-to">Контакты</a></li>
                    </ul>
                </nav>
                <div class="header__contact">
                    <div class="header__adress"><?php the_field('header__adress'); ?></div>
                    <a href="tel:<?php the_field('header__phone-link'); ?>" class="header__phone">
                        Тел: <?php the_field('header__phone-start'); ?> <span class="header__phone-span"><?php the_field('header__phone-yellow'); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- /heeader -->
