<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font.css">
</head>
<body>
    <!-- telephonchik -->
    <div class="telephone">
        <a href="tel:89113714786" class="telephone__number">
            <div class="telephone__img"></div>
        </a>
    </div>
    <!-- nav menu -->
    <nav class="nav">
        <div class="nav__menu row-header">
            <a href="index.php"><img class="nav__logo-img margin-right-10px" src="img/logo.svg" alt="logo"></a>
            <div class="nav__logo margin-right-20px">
                <a class="index" href="index.php">
                    <h1 class="nav__title">А МУЗЫ НЕ МОЛЧАТ</h1>
                    <h2 class="nav__title-desc">всероссийский фестиваль фронтовой поэзии</h2>
                </a>
            </div>
            <ul class="navigation">
                <li class="navigation__item margin-right-20px navigation__item_arr">
                    <a class="navigation__link" href="#">
                            <p class="navigation__item_arr-desc">о фестивале</p>
                            <img class="navigation__arrow" src="icons/arrow-black.png"  alt="">
                    </a>
                    <div class="navigation__levl-2">
                        <ul class="navigation__list">
                            <li class="navigation__item navigation__item_levl-2">
                                <a href="visitors/visitors.html" class="navigation__link__levl-2 navigation__link">посетителям</a>
                            </li>
                            <li class="navigation__item navigation__item_levl-2">
                                <a href="history/history.html" class="navigation__link__levl-2 navigation__link">история</a>
                            </li>
                            <li class="navigation__item navigation__item_levl-2">
                                <a href="festival-position/festival-position.html" class="navigation__link__levl-2 navigation__link">положение</a>
                            </li>
                            <li class="navigation__item navigation__item_levl-2">
                                <a href="program/program.php" class="navigation__link__levl-2 navigation__link">программа</a>
                            </li>
                            <li class="navigation__item navigation__item_levl-2">
                                <a href="reviews/reviews.php" class="navigation__link__levl-2 navigation__link">отзывы</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li class="navigation__item margin-right-20px">
                    <a class="navigation__link" href="news/news.php">новости</a>
                </li>
                <li class="navigation__item margin-right-20px">
                    <a class="navigation__link" href="gallery/gallery.php">галерея</a>
                </li>
                <li class="navigation__item margin-right-20px">
                    <a class="navigation__link" href="contacts/contacts.html">контакты</a>
                </li>
                <li class="navigation__item margin-right-20px">
                    <a class="navigation__link" href="participants/participants.php">почетные гости</a>
                </li>
            </ul>
            <a href="заявка/Заявка для участия в Фестивале.doc" download class="btn btn__nav btn_animated">скачать заявку <img class="btn__img" src="icons/btn-img-black.png" alt=""></a>
        </div>
    </nav>
    <!-- section 1 -->
    <section class="section-first">
        <div class="widget ">
                <div class="widget__days">
                    <div class="widget__day_is-hovered" style="transform: translateY(0rem);">день</div>
                    <p class="widget__day margin-bottom-20px widget__day_is-selected">1</p>
                    <p class="widget__day widget__day_2">2</p>
                    <div class="widget__line"></div>
                </div>
                <div class="widget__date">
                <?php
                            $db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "root");
                            $info = [];
                            if($query = $db->query("SELECT * FROM `program_day_1_widget` ORDER BY id DESC LIMIT 1")){
                                $info = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
                            }else{
                                print_r($db->ErrorInfo());
                            }
                            foreach($info as $data):?>
                                <div id=<?php echo $data['id']?> class="widget__date__date-1 display-none">
                                    <div class="widget__date__number-div">
                                        <p class="widget__date_number margin-right-10px"><?php echo $data['widget_date_number']?></p>
                                        <p class="widget__date_number-date"><?php echo $data['widget_date']?></p>
                                    </div>
                                    <div class="widget__date_desc-div margin-bottom-30px">
                                        <p class="widget__date_desc"><?php echo $data['widget_description']?></p>
                                    </div>
                                    <a href="program/program.php" class="btn-desc">Подробнее</a>
                                </div>
                            <?php endforeach; ?>
                            <?php
                            $db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "root");
                            $info = [];
                            if($query = $db->query("SELECT * FROM `program_day_2_widget` ORDER BY id DESC LIMIT 1")){
                                $info = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
                            }else{
                                print_r($db->ErrorInfo());
                            }
                            foreach($info as $data):?>
                                <div id=<?php echo $data['id']?> class="widget__date__date-2 display-none">
                                    <div class="widget__date__number-div">
                                        <p class="widget__date_number margin-right-10px"><?php echo $data['widget_date_number']?></p>
                                        <p class="widget__date_number-date"><?php echo $data['widget_date']?></p>
                                    </div>
                                    <div class="widget__date_desc-div margin-bottom-30px">
                                        <p class="widget__date_desc"><?php echo $data['widget_description']?></p>
                                    </div>
                                    <a href="program/program.php" class="btn-desc">Подробнее</a>
                                </div>
                            <?php endforeach; ?>
                </div>
                <button class="btn-widget margin-top-325px">
                    <img class="btn-widget_img" src="icons/image 1.svg" alt="">
                </button>
        </div>
    </section>
    <!-- section 2 -->
    <section class="section-second">
        <div class="row position-relative">
            <p class="title margin-bottom-50px">Новости</p>
            <a href="news/news.php" class="sub-title section-second__sub-title">
                <p>ВСЕ НОВОСТИ</p>
                <img class="sub-title__img" src="icons/arr-left.png" alt="">
            </a>
        </div>
        <div class="row">
            <?php
                            $db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "root");
                            $info = [];
                            if($query = $db->query("SELECT * FROM `news_cards` ORDER BY id DESC LIMIT 3")){
                                $info = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
                            }else{
                                print_r($db->ErrorInfo());
                            }
                            foreach($info as $data):?>
                            <div class="col-1-of-3">
                        <div class="news-card">
                            <div class="news-card__div">
                            <div class="news-card__div-img">
                                <img class="news-card__img" src="uploads/<?php echo $data['card_img']?>" alt="">
                            </div>
                            <div class="news-card__desc">
                                <div class="margin-top-70px">
                                    <p class="news-card__date margin-bottom-30px"><?php echo $data['date']?></p>
                                    <h4 class="news-card__title margin-bottom-50px"><?php echo $data['name']?></h4>
                                    <a href="news/<?php echo $data['name_src']?>.php" id="<?php echo $data['id']?>" class="btn-card">Узнать больше &rarr;</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
    </section>
    <!-- section 3 -->
    <section class="section-third section-third-index">
        <div class="row position-relative">
            <p class="title margin-bottom-50px">Галерея</p>
            <a href="gallery/gallery.php" class="sub-title section-second__sub-title sub-title_2">
                <p>ВСЕ ФОТО</p>
                <img class="sub-title__img sub-title__img_2" src="icons/arr-left.png" alt="">
            </a>
            <div class="gallery">
                <div class="gallery__item">
                    <img src="img/img-2.jpeg" alt="" class="gallery__item-img">
                    <div class="gallery__item_is-hovered">
                        <h4 class="news-card__title margin-bottom-100px">Первые фестивальные кадры 2024 г.</h4>
                        <a href="#" class="btn-card">Узнать больше &rarr;</a>
                    </div>
                </div>
                <div class="gallery__item">
                    <img src="img/img-1.jpeg" alt="" class="gallery__item-img">
                    <div class="gallery__item_is-hovered">
                        <h4 class="news-card__title margin-bottom-100px">Первые фестивальные кадры 2024 г.</h4>
                        <a href="#" class="btn-card">Узнать больше &rarr;</a>
                    </div>
                </div>
                <div class="gallery__item">
                    <img src="img/img-1.jpeg" alt="" class="gallery__item-img">
                    <div class="gallery__item_is-hovered">
                        <h4 class="news-card__title margin-bottom-100px">Первые фестивальные кадры 2024 г.</h4>
                        <a href="#" class="btn-card">Узнать больше &rarr;</a>
                    </div>
                </div>
                <div class="gallery__item">
                    <img src="img/img-1.jpeg" alt="" class="gallery__item-img">
                    <div class="gallery__item_is-hovered">
                        <h4 class="news-card__title margin-bottom-100px">Первые фестивальные кадры 2024 г.</h4>
                        <a href="#" class="btn-card">Узнать больше &rarr;</a>
                    </div>
                </div>
                <div class="gallery__item">
                    <img src="img/img-1.jpeg" alt="" class="gallery__item-img">
                    <div class="gallery__item_is-hovered">
                        <h4 class="news-card__title margin-bottom-100px">Первые фестивальные кадры 2024 г.</h4>
                        <a href="#" class="btn-card">Узнать больше &rarr;</a>
                    </div>
                </div>
                <div class="gallery__item">
                    <img src="img/img-1.jpeg" alt="" class="gallery__item-img">
                    <div class="gallery__item_is-hovered">
                        <h4 class="news-card__title margin-bottom-100px">Первые фестивальные кадры 2024 г.</h4>
                        <a href="#" class="btn-card">Узнать больше &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 4 -->
    <section class="section-fourth section-fourth-index">
        <div class="row">
            <p class="title margin-bottom-50px">Как добраться</p>
            <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Яндекс Карты</a><a href="https://yandex.ru/maps/geo/derevnya_borki/53139659/?ll=30.246916%2C56.081929&utm_medium=mapframe&utm_source=maps&z=15.43" style="color:#eee;font-size:12px;position:absolute;top:14px;">Деревня Борки — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=30.246916%2C56.081929&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1MzEzOTY1ORKYAdCg0L7RgdGB0LjRjywg0J_RgdC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCDQktC10LvQuNC60L7Qu9GD0LrRgdC60LjQuSDRgNCw0LnQvtC9LCDQn9C-0YDQtdGH0LXQvdGB0LrQsNGPINCy0L7Qu9C-0YHRgtGMLCDQtNC10YDQtdCy0L3RjyDQkdC-0YDQutC4IgoNMv3xQRUTUmBC&z=15.43" width="1140" height="630" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
        </div>
    </section>
    <!-- footer -->
    <footer class="footer">
        <div class="row footer__line"></div>
        <div class="row footer__row">
            <div class="contacts__items margin-bottom-50px">
                <div class="footer__item">
                    <a href="tel:89113714786" class="footer__link footer-paragraph margin-right-10px">Светлана Размыслович +7-911-371-47-86</a>
                    <div class="footer__icons">
                        <a href="#"><img class="margin-right-10px footer__icon footer__icon_tg" src="icons/telegram.png" alt=""></a>
                        <a href="#"><img class="margin-right-10px footer__icon footer__icon_wh" src="icons/whatsapp.png" alt=""></a>
                    </div>
                </div>
                <a href="#" class="footer-paragraph footer__item footer__link footer-site">светслова.рф</a>
                <a href="#" class="footer__item footer__item__mail footer__item_right footer__link">
                    <img class="margin-right-10px footer__icon footer__icon_mail" src="icons/mail.png" alt="">
                    <p class="footer-paragraph">lukidebut@mail.ru</p>
                </a>
                <a href="#" class="footer__item footer__item__vk footer__link margin-bottom-60px-imp">
                    <img class="margin-right-10px footer__icon footer__icon footer__icon_vk" src="icons/vk.png" alt="">
                    <p class="footer-paragraph ">s.razmyslovich</p>
                </a>
            </div>
            <p class="footer__item footer__name">© 1984-2024 "А музы не молчат"</p>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/news_card.js"></script>
</body>
</html>

<!-- <div class="row">
    <div class="col-1-of-2">
        col-1-of-2
    </div>
    <div class="col-1-of-2">
        col-1-of-2
    </div>
</div>

<div class="row">
    <div class="col-1-of-3">
        col-1-of-3
    </div>
    <div class="col-1-of-3">
        col-1-of-3 
    </div>
    <div class="col-1-of-3">
        col-1-of-3 
    </div>
</div>

<div class="row">
    <div class="col-1-of-3">
        col-1-of-3
    </div>
    <div class="col-2-of-3">
        col-2-of-3 
    </div>
</div>

<div class="row">
    <div class="col-1-of-4">
        col-1-of-4
    </div>
    <div class="col-1-of-4">
        col-1-of-4
    </div>
    <div class="col-1-of-4">
        col-1-of-4 
    </div>
    <div class="col-1-of-4">
        col-1-of-4 
    </div>
</div>

<div class="row">
    <div class="col-1-of-4">
        col-1-of-4
    </div>
    <div class="col-1-of-4">
        col-1-of-4
    </div>
    <div class="col-2-of-4">
        col-2-of-4
    </div>
</div>

<div class="row">
    <div class="col-1-of-4">
        col-1-of-4
    </div>
    <div class="col-3-of-4">
        col-3-of-4
    </div>
</div> -->