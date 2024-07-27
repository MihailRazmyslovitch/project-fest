<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="..css/font.css">
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
                <a href="index.php"><img class="nav__logo-img margin-right-10px" src="../img/logo.svg" alt=""></a>
                <div class="nav__logo margin-right-20px">
                    <a class="index.html" href="../index.php">
                        <h1 class="nav__title">А МУЗЫ НЕ МОЛЧАТ</h1>
                        <h2 class="nav__title-desc">всероссийский фестиваль фронтовой поэзии</h2>
                    </a>
                </div>
                <ul class="navigation">
                    <li class="navigation__item margin-right-20px navigation__item_arr">
                        <a class="navigation__link" href="#">
                                <p class="navigation__item_arr-desc">о фестивале</p>
                                <img class="navigation__arrow" src="../icons/arrow-black.png"  alt="">
                        </a>
                        <div class="navigation__levl-2">
                            <ul class="navigation__list">
                                <li class="navigation__item navigation__item_levl-2">
                                    <a href="../visitors/visitors.html" class="navigation__link__levl-2 navigation__link">посетителям</a>
                                </li>
                                <li class="navigation__item navigation__item_levl-2">
                                    <a href="../history/history.html" class="navigation__link__levl-2 navigation__link">история</a>
                                </li>
                                <li class="navigation__item navigation__item_levl-2">
                                    <a href="../festival-position/festival-position.html" class="navigation__link__levl-2 navigation__link">положение</a>
                                </li>
                                <li class="navigation__item navigation__item_levl-2">
                                    <a href="../program/program.html" class="navigation__link__levl-2 navigation__link">программа</a>
                                </li>
                                <li class="navigation__item navigation__item_levl-2">
                                    <a href="../reviews/reviews.php" class="navigation__link__levl-2 navigation__link">отзывы</a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    <li class="navigation__item margin-right-20px">
                        <a class="navigation__link" href="../news/news.php">новости</a>
                    </li>
                    <li class="navigation__item margin-right-20px">
                        <a class="navigation__link" href="../gallery/gallery.php">галерея</a>
                    </li>
                    <li class="navigation__item margin-right-20px">
                        <a class="navigation__link" href="../contacts/contacts.html">контакты</a>
                    </li>
                    <li class="navigation__item margin-right-20px">
                        <a class="navigation__link" href="../participants/participants.php">почетные гости</a>
                    </li>
                </ul>
                <a href="../заявка/Заявка для участия в Фестивале.doc" download class="btn btn__nav btn_animated">скачать заявку <img class="btn__img" src="../icons/btn-img-black.png" alt=""></a>
            </div>
        </nav>
        <!-- section first -->
    <section class="visitors-section">
        <div class="visitors-section__background margin-bottom-100px">
            <div class="row position-relative"> 
                    <div class="margin-top-160px position-absolute">
                    <div class="navigation_mini margin-bottom-50px">
                        <a class="style-link margin-right-10px" href="../index.php">Главная</a>
                        <img class="style-link__arrow margin-right-10px" src="../icons/arr-left.png" alt="">
                        <a class="style-link margin-right-10px" href="../visitors/visitors.html">Программа</a>
                    </div>
                    <h2 class="title margin-bottom-80px">Программа фестиваля</h2>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="program margin-bottom-100px">
                <div class="widget__days program__days">
                    <div class="widget__day_is-hovered" style="transform: translateY(0rem);">день</div>
                    <p class="widget__day margin-bottom-20px widget__day_is-selected">1</p>
                    <p class="widget__day widget__day_2">2</p>
                    <div class="widget__line opasity-1"></div>
                </div>
                <div class="program__date">
                    <div class="program__date__date-1">
                        <?php
                            $db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "1234");
                            $info = [];
                            $info_date = [];
                            if($query = $db->query("SELECT * FROM `program_day_1`")){
                                $info = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
                            }else{
                                print_r($db->ErrorInfo());
                            }
                            if($query = $db->query("SELECT `date` FROM `program_day_1` ORDER BY id DESC LIMIT 1")){
                                $info_date = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
                            }else{
                                print_r($db->ErrorInfo());
                            }
                            foreach($info_date as $data):?>
                            <div class="program__date__number-div margin-bottom-50px">
                            <p class="program__date_number"><?php echo $data['date']?></p>
                            </div>
                        <?php endforeach;
                            foreach($info as $data):?>
                                <div id=<?php echo $data['id']?> class="program__item-row">
                                        <div class="program__item-time"><?php echo $data['time']?></div>
                                        <div class="program__item-desc"><?php echo $data['description']?>
                                            <br><em><?php echo $data['place']?></em>
                                        </div>
                                    </div>
                            <?php endforeach; ?>
                    </div>
                    <div class="program__date__date-2 display-none">
                        <?php
                            $db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "1234");
                            $info = [];
                            $info_date = [];
                            if($query = $db->query("SELECT * FROM `program_day_2`")){
                                $info = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
                            }else{
                                print_r($db->ErrorInfo());
                            } if($query = $db->query("SELECT `date` FROM `program_day_2` ORDER BY id DESC LIMIT 1")){
                                $info_date  = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
                            }else{
                                print_r($db->ErrorInfo());
                            }
                            foreach($info_date as $data):?>
                                <div class="program__date__number-div margin-bottom-50px">
                                <p class="program__date_number"><?php echo $data['date']?></p>
                                </div>
                            <?php endforeach;
                            foreach($info as $data):?>
                                <div id=<?php echo $data['id']?> class="program__item-row">
                                        <div class="program__item-time"><?php echo $data['time']?></div>
                                        <div class="program__item-desc"><?php echo $data['description']?>
                                            <br><em><?php echo $data['place']?></em>
                                        </div>
                                    </div>
                            <?php endforeach; ?>
                    </div>
                </div>
        </div>
        <div class="navigation_mini margin-bottom-50px">
            <img class="style-link__arrow style-link__arrow_2 margin-right-10px" src="../icons/arr-left.png" alt="">
            <a class="style-link navigation_mini-bottom" href="../index.php">на главную</a>
        </div>
    </div>
    </section>
    <footer class="footer">
        <div class="row footer__line"></div>
        <div class="row footer__row">
            <div class="contacts__items margin-bottom-50px">
                <div class="footer__item">
                    <a href="tel:89113714786" class="footer__link footer-paragraph margin-right-10px">Светлана Размыслович +7-911-371-47-86</a>
                    <div class="footer__icons">
                        <a href="#"><img class="margin-right-10px footer__icon footer__icon_tg" src="../icons/telegram.png" alt=""></a>
                        <a href="#"><img class="margin-right-10px footer__icon footer__icon_wh" src="../icons/whatsapp.png" alt=""></a>
                    </div>
                </div>
                <a href="#" class="footer-paragraph footer__item footer__link footer-site">светслова.рф</a>
                <a href="#" class="footer__item footer__item__mail footer__item_right footer__link">
                    <img class="margin-right-10px footer__icon footer__icon_mail" src="../icons/mail.png" alt="">
                    <p class="footer-paragraph">lukidebut@mail.ru</p>
                </a>
                <a href="#" class="footer__item footer__item__vk footer__link margin-bottom-60px-imp">
                    <img class="margin-right-10px footer__icon footer__icon footer__icon_vk" src="../icons/vk.png" alt="">
                    <p class="footer-paragraph ">s.razmyslovich</p>
                </a>
            </div>
            <p class="footer__item footer__name">© 1984-2024 "А музы не молчат"</p>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>