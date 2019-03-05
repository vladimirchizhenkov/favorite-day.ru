<!DOCTYPE html>
<html lang="<?php echo LANG_RU ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
<div class="scroll-top">up</div>
<div class="body-wrapper">
    <!--header-->
    <header class="header">
        <div class="container">
            <div class="row mt-4 mb-3">

                <div class="col-md-3 col-lg-3">
                    <div class="header__logo">
                        <a href="/index.php" class="link">
                            <img src="/assets/img/logo/logo.svg" alt="logo" class="header__image">
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <ul class="menu">
                        <li class="menu__item"><a href="/index.php?c=index" class="menu__link">Обзоры</a></li>
                        <li class="menu__item"><a href="/index.php?c=article" class="menu__link">Новости-Outdoor</a>
                        </li>
                        <li class="menu__item"><a href="/index.php?c=tour" class="menu__link">Туры</a></li>
                        <li class="menu__item"><a href="/index.php?c=shand" class="menu__link">Барахолка</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-lg-3">
                    <div class="div"
                         style="display: flex; align-items: center; height: 100%; justify-content: flex-end;">
                        <form action="" method="post" class="form">
                            <div class="form__item form__item--search">
                                <input type="text" class="form__input form__input--search" placeholder="Search">
                                <input type="submit" class="form__button form__button--search" value="">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!--main content-->
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="content__main">
                        <?php echo $innerContent ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="footer__inner">

                        <div class="footer__left">
                            <div class="footer__item footer__item--partner">Наши партнеры:</div>
                            <a href="" class="footer__link"><img src="/assets/img/partners/footer_dump2.jpg"
                                                                 alt="footer"
                                                                 class="footer__item footer__item--img"></a>
                            <a href="" class="footer__link"><img src="/assets/img/partners/footer_dump1.jpg"
                                                                 alt="footer"
                                                                 class="footer__item footer__item--img"></a>
                            <a href="" class="footer__link"><img src="/assets/img/partners/footer_dump3.png"
                                                                 alt="footer"
                                                                 class="footer__item footer__item--img"></a>
                        </div>

                        <div class="footer__right">
                            <div class="social">
                                <div class="social__title">Присоединяйтесь к нам</div>
                                <ul class="social__list">
                                    <li class="social__icons"><a target="_blank" href="#"
                                                                 class="social__link social__link--vk"></a>
                                    </li>
                                    <li class="social__icons"><a target="_blank" href="#"
                                                                 class="social__link social__link--yt"></a>
                                    </li>
                                    <li class="social__icons"><a target="_blank" href="#"
                                                                 class="social__link social__link--inst"></a>
                                    </li>
                                </ul>
                                <div class="social__tel">
                                    <a href="#" class="social__phone social__phone--ico">8 927 777 55 44</a>
                                    <a href="#" class="social__phone">8 927 333 11 44</a>
                                </div>
                                <div class="social__email">
                                    <a href="#" class="social__mail-link">feedbacks@actdays.com</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/assets/js/libs.min.js"></script>
<script src="/assets/js/common.js"></script>
</body>
</html>