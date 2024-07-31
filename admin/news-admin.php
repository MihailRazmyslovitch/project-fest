<?php
$host = "localhost";
$user = "root";
$password = "root";
$database = "BorkiFestival_site";

if (isset($_POST['name']) && isset($_POST['description_2']) && isset($_POST['card_img']) && isset($_POST['img']) && isset($_POST['description'])){
//переменные с формы
$name = strip_tags(trim($_POST['name']));
$description = strip_tags(trim($_POST['description']));
$description_2 = strip_tags(trim($_POST['description_2']));


/* $tmp_dir = '/var/www/uploads/'; // путь к временной директории из настроек php.ini
$tmp_file = $tmp_dir . basename($_FILES['img']['name']); // путь к временному файлу
$img = $tmp_file;
$tmp_dir = '/var/www/uploads/'; // путь к временной директории из настроек php.ini
$tmp_file = $tmp_dir . basename($_FILES['card_img']['name']); // путь к временному файлу
$card_img = $tmp_file; */


/* $uploads_dir = '/uploads';
foreach ($_FILES["img"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["img"]["tmp_name"][$key];
        // basename() может предотвратить атаку на файловую систему;
        // может быть целесообразным дополнительно проверить имя файла
        $name = basename($_FILES["img"]["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}; */

$arr = [
    'января',
    'февраля',
    'марта',
    'апреля',
    'мая',
    'июня',
    'июля',
    'августа',
    'сентября',
    'октября',
    'ноября',
    'декабря'
    ];
    $month = date('n')-1;

    $date = date("d $arr[$month] Y");

$link = mysqli_connect($host, $user, $password, $database);

$dbtable = 'cards';

$sql = "INSERT INTO ".$dbtable." (name, description, description_2, date, card_img, img) VALUES ('$name', '$description', '$description_2', '$date', '$card_img', '$img')";

//внесём данные с формы в БД
$res = mysqli_query($link, $sql);

mysqli_close($link);
header('location: news-admin.php');
echo '<input type="submit">';
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
                    <li class="navigation__item margin-right-20px">
                        <a class="navigation__link" href="../admin/news-admin.php">новости</a>
                    </li>
                    <li class="navigation__item margin-right-20px">
                        <a class="navigation__link" href="../admin/gallery-admin.php">галерея</a>
                    </li>
                    <li class="navigation__item margin-right-20px">
                        <a class="navigation__link" href="../admin/program-admin.php">программа</a>
                    </li>
                    <li class="navigation__item margin-right-20px">
                        <a class="navigation__link" href="../admin/participants-admin.php">почетные гости</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="history-section">
            <div class="history-section__background margin-bottom-100px">
                <div class="row position-relative"> 
                        <div class="margin-top-160px position-absolute">
                        <div class="navigation_mini margin-bottom-50px">
                            <a class="style-link margin-right-10px" href="../index.php">Главная</a>
                            <img class="style-link__arrow margin-right-10px" src="../icons/arr-left.png" alt="">
                            <a class="style-link margin-right-10px" href="../history/history.html">Панель администрирования</a>
                        </div>
                        <h2 class="title margin-bottom-80px">Добро пожаловать на страницу администрирования программы фестиваля!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="news-row margin-bottom-50px">
            <div class="news-card">
                        <div id="1" class="news-card-is-open display-none">
                        <section class="news-card__section">
                                <div class="history-section__background">
                                    <div class="row position-relative"> 
                                            <div class="margin-top-160px position-absolute">
                                            <div class="navigation_mini margin-bottom-50px">
                                                <a class="style-link margin-right-10px" href="index.php">Главная</a>
                                                <img class="style-link__arrow margin-right-10px" src="icons/arr-left.png" alt="">
                                                <a class="style-link margin-right-10px" href="news/news.php">Новости</a>
                                                <img class="style-link__arrow margin-right-10px" src="icons/arr-left.png" alt="">
                                                <a class="style-link margin-right-10px" href="#">Название новости</a>
                                            </div>
                                            <h2 class="title margin-bottom-80px">Название новости</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row background-white">
                                        <p class="footer-paragraph margin-bottom-25px margin-top-100px">Уважаемые гости!</p>
                                        <p class="history-section__desc margin-bottom-100px">Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: перспективное планирование не оставляет шанса для прогресса профессионального сообщества. Кстати, действия представителей оппозиции ограничены исключительно образом мышления. Но новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствующей насущным потребностям. Наше дело не так однозначно, как может показаться: сплочённость команды профессионалов однозначно определяет каждого участника как способного принимать собственные решения касаемо благоприятных перспектив. Как уже неоднократно упомянуто, сделанные на базе интернет-аналитики выводы, вне зависимости от их уровня, должны быть объединены в целые кластеры себе подобных. Предварительные выводы неутешительны: понимание сути ресурсосберегающих технологий требует анализа модели развития. Равным образом, сложившаяся структура организации не оставляет шанса для укрепления моральных ценностей. Идейные соображения высшего порядка, а также повышение уровня гражданского сознания позволяет оценить значение системы массового участия.</p>
                                        <div class="history-section__img margin-bottom-100px"></div>
                                    <div><p class="history-section__desc margin-bottom-50px">Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: перспективное планирование не оставляет шанса для прогресса профессионального сообщества. Кстати, действия представителей оппозиции ограничены исключительно образом мышления. Но новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствующей насущным потребностям. Наше дело не так однозначно, как может показаться: сплочённость команды профессионалов однозначно определяет каждого участника как способного принимать собственные решения касаемо благоприятных перспектив. Как уже неоднократно упомянуто, сделанные на базе интернет-аналитики выводы, вне зависимости от их уровня, должны быть объединены в целые кластеры себе подобных. Предварительные выводы неутешительны: понимание сути ресурсосберегающих технологий требует анализа модели развития. Равным образом, сложившаяся структура организации не оставляет шанса для укрепления моральных ценностей. Идейные соображения высшего порядка, а также повышение уровня гражданского сознания позволяет оценить значение системы массового участия.</p>
                                        <div class="navigation_mini margin-bottom-50px">
                                            <img class="style-link__arrow style-link__arrow_2 margin-right-10px" src="icons/arr-left.png" alt="">
                                            <a class="style-link navigation_mini-bottom" href="index.php">на главную</a>
                                        </div>
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
                            </div>
                            <div class="news-card__div">
                            <div class="news-card__div-img">
                                <img class="news-card__img" src="img/card-img.jpeg" alt="">
                            </div>
                            <div class="news-card__desc">
                                <div class="margin-top-70px">
                                    <p class="news-card__date margin-bottom-30px">Дата</p>
                                    <h4 class="news-card__title margin-bottom-50px">Название</h4>
                                    <a href="#" id="1" class="btn-card">Узнать больше &rarr;</a>
                                </div>
                            </div>
                            </div>
                        </div>
            </div>
        <div class="form-flex-center">
    <form enctype='multipart/form-data' action="news-admin.php" method="POST" id="form-admin" class="form__admin form__admin_program">
        <h2 class="title-footer margin-bottom-40px">
            Добавьте новость
        </h2>
        <div class="form__group">
        <input type="text" class="form__input form_login" placeholder="Введите название" name="name" id="name" required/>
        </div>
        <div class="form__group">
        <textarea type="text" class="form__input form__input_big form_password" placeholder="Введите первую часть статьи" id="description" name="description" required></textarea>
        </div>
        <div class="form__group">
        <textarea type="text" class="form__input form__input_big form_password" placeholder="Введите вторую часть статьи" id="description_2" name="description_2" required></textarea>
        </div>
        <div class="form__group">
        <input type="file" class="form__input form_login" name="card_img"/>
        </div>
        <div class="form__group">
        <input type="file" class="form__input form_login" name="img"/>
        </div>
        <div class="form__groop">
          <input type="submit" placeholder="Отправить" class="btn_animated btn-form margin-bottom-20px">
        </div>
      </form>
      </div>
      <div class="navigation_mini margin-bottom-50px">
                    <img class="style-link__arrow style-link__arrow_2 margin-right-10px" src="../icons/arr-left.png" alt="">
                    <a class="style-link navigation_mini-bottom" href="../index.php">на главную</a>
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
    <script src="js/script-program.js"></script>
    </body>
    </html>