<!DOCTYPE html>
<html lang="ja" id="pagetop">

<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="./assets/img/common/favicon.ico" rel="shortcut icon">
    <?php include('meta.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="./assets/css/style.min.css" rel="stylesheet">
    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/jquery-migrate-3.0.1.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85984512-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-85984512-1');
    </script>
</head>

<body class="page-<?php echo $pageid; ?>">
    <div id="wrapper">
        <header class="c-header">
            <div class="c-header__inner">
                <h1 class="c-header__logo">
                    <a href="/">
                        <img src="./assets/img/common/logo.png" alt="株式会社プレテック採⽤サイト（PRE-TECK RECRUIT）">
                    </a>
                </h1>

                <nav class="c-header__nav">
                    <ul class="c-header__menu">
                        <li class="c-header__item">
                            <a href="#company" class="c-header__txt">
                                <span class="c-header__txteng">COMPANY</span>
                                <span class="c-header__txtjap pc-only">企業情報</span>
                                <span class="c-header__txtjap sp-only">採用メッセージ・企業理念</span>
                            </a>
                        </li>
                        <li class="c-header__item sp-only">
                            <a href="#data" class="c-header__txt">
                                <span class="c-header__txtjap">数字で見るプレテック</span>
                            </a>
                        </li>
                        <li class="c-header__item">
                            <a href="#business" class="c-header__txt">
                                <span class="c-header__txteng">BUSINESS</span>
                                <span class="c-header__txtjap pc-only">事業紹介</span>
                                <span class="c-header__txtjap sp-only">事業・サービス紹介</span>
                            </a>
                        </li>
                        <li class="c-header__item">
                            <a href="#work" class="c-header__txt">
                                <span class="c-header__txteng">WORK & STAFF</span>
                                <span class="c-header__txtjap pc-only">職種紹介・社員紹介</span>
                                <span class="c-header__txtjap sp-only">職種紹介</span>
                            </a>
                        </li>
                        <li class="c-header__item sp-only">
                            <a href="#staff" class="c-header__txt">
                                <span class="c-header__txtjap">社員紹介</span>
                            </a>
                        </li>
                        <li class="c-header__item">
                            <a href="#recruit" class="c-header__txt">
                                <span class="c-header__txteng">RECRUIT</span>
                                <span class="c-header__txtjap pc-only">採用情報</span>
                                <span class="c-header__txtjap sp-only">募集要項</span>
                            </a>
                        </li>
                        <li class="c-header__item sp-only">
                            <a href="#flow" class="c-header__txt">
                                <span class="c-header__txtjap">採用フロー</span>
                            </a>
                        </li>
                    </ul>

                    <div class="c-header__entry">
                        <a href="https://www.pre-tech.co.jp/contact/">
                            <span class="pc-only">ENTRY</span>
                            <span class="sp-only">エントリーする</span>
                        </a>
                    </div>

                    <div class="c-header__hamburger close sp-only" id="closeMenu">
                        <div class="c-header__hamburger__icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <span class="c-header__hamburger__txt">CLOSE</span>
                    </div>
                </nav>

                <div class="c-header__action sp-only">
                    <div class="c-header__entry">
                        <a href="https://www.pre-tech.co.jp/contact/">
                            <span>ENTRY</span>
                        </a>
                    </div>
                    <div class="c-header__hamburger sp-only" id="openMenu">
                        <div class="c-header__hamburger__icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <span class="c-header__hamburger__txt">MENU</span>
                    </div>
                </div>

            </div>
        </header>