<?php
    $db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "root");
    $info = [];
    if($query = $db->query("SELECT * FROM `reviews` ORDER BY `id` DESC")){
        $info = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
    }else{
        print_r($db->ErrorInfo());
    }
    ?>
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
<link rel="stylesheet" href="../css/font.css">
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
    <section class="reviews-section">
        <div class="reviews-section__background display-none">
                      <form action="sql/form.php" method="POST" id="form-reviews" class="form">
                        <div class="form__cross">
                            <span class="span"></span>
                            <span class="span"></span>
                        </div>
                        <div class="margin-bottom-40px">
                        <h2 class="title-footer">
                            Оставьте отзыв о фестивале
                        </h2>
                        </div>
                        <div class="form__group">
                        <input type="text" class="form__input" placeholder="Имя Фамилия" name="name" id="name" required/>
                        </div>
                        <div class="form__group">
                        <textarea type="text" class="form__input form__input_big" placeholder="Ваш отзыв" id="text" name="text" required></textarea>
                        </div>
                        <div class="form__desc margin-bottom-50px">
                            Заполняя данную форму, вы принимаете условия 
                            <a download href="/uploads/policy.docx">Соглашения</a>
                            об
                            обработке и использовании персональных данных            
                        </div>
                        <div class="form__groop">
                          <input type="submit" class="btn_animated btn-form" value="ОТПРАВИТЬ">
                        </div>
                      </form>
                    </div>
            <div class="row position-relative"> 
                    <div class="margin-top-160px">
                    <div class="navigation_mini margin-bottom-50px">
                        <a class="style-link margin-right-10px" href="../index.php">Главная</a>
                        <img class="style-link__arrow margin-right-10px" src="../icons/arr-left.png" alt="">
                        <a class="style-link margin-right-10px" href="../history/history.html">Отзывы</a>
                    </div>
                    <h2 class="title margin-bottom-50px">Отзывы</h2>
                </div>
                <a href="#" class="btn btn_animated btn__reviews margin-bottom-100px">оставить отзыв
                    <img class="btn__img btn__reviews_form-open" src="../icons/image 1.svg" alt="">
                </a>
                <?php foreach($info as $data):?>
                    <div id=<?php echo $data['id']?> class="reviews margin-bottom-50px">
                        <div class="reviews__div">
                            <h5 class="reviews__fio margin-bottom-40px margin-right-10px"><?php echo $data['name']?></h5>
                            <p class="reviews__date"><?php echo $data['date']?></p>
                        </div>
                        <p class="reviews__reviews margin-bottom-50px"><?php echo $data['text']?></p>
                    </div> 
                <?php endforeach; ?>
                


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