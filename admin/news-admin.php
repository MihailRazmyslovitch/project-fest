<?php
$host = "localhost";
$user = "root";
$password = "root";
$database = "BorkiFestival_site";
$db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "root");
    $id_db = $db->query("SELECT id  FROM `news_cards` ORDER BY id DESC LIMIT 1");
    $id_db = +1;
if (isset($_POST['name']) && isset($_POST['description_2']) && isset($_POST['description'])){
    //переменные с формы
    $title = strip_tags(trim($_POST['name']));
    $description = strip_tags(trim($_POST['description']));
    $description_2 = strip_tags(trim($_POST['description_2']));

    //создание новой страницы новости
    function translit($str) {
        $russian = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
        
       $translit = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    
       return str_replace($russian, $translit, $str);
    }
    
    $latin = translit($title);
    $name_src = $latin;
    $myfile = fopen("../news/$latin.php", "w") or die("Unable to open file!");
    $txt = 
    '<!DOCTYPE html>
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
        <!-- nav menu -->
        <nav class="nav">
            <div class="nav__menu row-header">
                <a href="../index.php">
                    <img class="nav__logo-img margin-right-10px" src="../img/logo.svg" alt="logo">
                </a>
                <div class="nav__logo margin-right-20px">
                    <a class="index" href="../index.php">
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
                                    <a href="../program/program.php" class="navigation__link__levl-2 navigation__link">программа</a>
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
    <?php
                                $db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "root");
                                $info = [];
                                $str = pathinfo(__FILE__, PATHINFO_FILENAME); // осторожно! необходима экранизация
                                if($query = $db->query("SELECT * FROM `news_cards` WHERE name_src LIKE \'$str\'")){
                                    $info = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
                                }else{
                                    print_r($db->ErrorInfo());
                                }
                                foreach($info as $data):?>
        <div class="news-card__section">
                <div class="history-section__background">
                    <div class="row position-relative"> 
                            <div class="margin-top-160px position-absolute">
                            <div class="navigation_mini margin-bottom-50px">
                                <a class="style-link margin-right-10px" href="../index.php">Главная</a>
                                <img class="style-link__arrow margin-right-10px" src="../icons/arr-left.png" alt="">
                                <a class="style-link margin-right-10px" href="../news/news.php">Новости</a>
                                <img class="style-link__arrow margin-right-10px" src="../icons/arr-left.png" alt="">
                                <a class="style-link margin-right-10px" href="#"><?php echo $data["name"]?></a>
                            </div>
                            <h2 class="title margin-bottom-80px"><?php echo $data["name"]?></h2>
                        </div>
                    </div>
                </div>
                <div class="row background-white">
                        <p class="footer-paragraph margin-bottom-25px margin-top-100px"><?php echo $data["name"]?></p>
                        <p class="history-section__desc margin-bottom-100px"><?php echo $data["description"]?></p>
                        <img src="../uploads/<?php echo $data["img"]?>" class="history-section__img margin-bottom-100px"></img>
                        <div>
                        <p class="history-section__desc margin-bottom-50px"><?php echo $data["description_2"]?></p>
                            <div class="navigation_mini margin-bottom-50px">
                                <img class="style-link__arrow style-link__arrow_2 margin-right-10px" src="../icons/arr-left.png" alt="">
                                <a class="style-link navigation_mini-bottom" href="../index.php">на главную</a>
                            </div>
                        </div>
                </div>
        </div>
        <?php endforeach; ?>
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
        <script src="../js/news_card.js"></script>
    </body>
    </html>';
    fwrite($myfile, $txt);
    fclose($myfile); 



$uploaddir = '../uploads';
$uploadfile = "$uploaddir/". basename($_FILES['card_img']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['card_img']['tmp_name'], $uploadfile)) {
    echo "Файл не содержит ошибок и успешно загрузился на сервер.\n";
} else {
    echo "Возможная атака на сервер через загрузку файла!\n";
}

echo 'Дополнительная отладочная информация:';
print_r($_FILES);

print "</pre>";

$card_img = $_FILES["card_img"]["name"];




$uploaddir = '../uploads';
$uploadfile = "$uploaddir/". basename($_FILES['img']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
    echo "Файл не содержит ошибок и успешно загрузился на сервер.\n";
} else {
    echo "Возможная атака на сервер через загрузку файла!\n";
}

echo 'Дополнительная отладочная информация:';
print_r($_FILES);

print "</pre>";

$img = $_FILES["img"]["name"];


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

$dbtable = 'news_cards';

$sql = "INSERT INTO ".$dbtable." (name, name_src, description, description_2, date, card_img, img) VALUES ('$title', '$name_src', '$description', '$description_2', '$date', '$card_img', '$img')";

//внесём данные с формы в БД
$res = mysqli_query($link, $sql);

mysqli_close($link);
header('location: news-admin.php');
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
        <section class="news-section margin-bottom-100px">
            <div class="history-section__background margin-bottom-100px">
                <div class="row position-relative"> 
                        <div class="margin-top-160px position-absolute">
                        <div class="navigation_mini margin-bottom-50px">
                            <a class="style-link margin-right-10px" href="../index.php">Главная</a>
                            <img class="style-link__arrow margin-right-10px" src="../icons/arr-left.png" alt="">
                            <a class="style-link margin-right-10px" href="../admin/news-admin.php">Панель администрирования</a>
                        </div>
                        <h2 class="title margin-bottom-80px">Добро пожаловать на страницу администрирования новостей фестиваля!</h2>
                    </div>
                </div>
            </div>
            </section>
            <section class="second-section margin-bottom-100px">
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
                                <img class="news-card__img" src="../uploads/<?php echo $data['card_img']?>" alt="">
                            </div>
                            <div class="news-card__desc">
                                <div class="margin-top-70px">
                                    <p class="news-card__date margin-bottom-30px"><?php echo $data['date']?></p>
                                    <h4 class="news-card__title margin-bottom-50px"><?php echo $data['name']?></h4>
                                    <a href="../news/<?php echo $data['name_src']?>.php" id="<?php echo $data['id']?>" class="btn-card">Узнать больше &rarr;</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                </section>
                <section class="third-section">
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
      <div class="row">
      <div class="navigation_mini navigation_mini-bottom  navigation_mini_index margin-bottom-50px">
                    <img class="style-link__arrow style-link__arrow_index style-link__arrow_2 margin-right-10px" src="../icons/arr-left.png" alt="">
                    <a class="style-link navigation_mini-bottom_index" href="../index.php">на главную</a>
                </div>
                </div>
                </section>
    <!-- footer -->
    <footer class="footer footer-index">
        <div class="row footer__line"></div>
        <div class="row footer__row">
            <div class="contacts__items margin-bottom-50px">
                <div class="footer__item">
                    <a href="tel:89113714786" class="footer__link footer-paragraph margin-right-10px">Светлана Размыслович +7-911-371-47-86</a>
                    <div class="footer__icons">
                        <a href="#"><img class="margin-right-10px footer__icon footer__icon_tg_index" src="../icons/telegram.png" alt=""></a>
                        <a href="#"><img class="margin-right-10px footer__icon footer__icon_wh_index" src="../icons/whatsapp.png" alt=""></a>
                    </div>
                </div>
                <a href="#" class="footer-paragraph footer__item footer__link footer-site">светслова.рф</a>
                <a href="#" class="footer__item footer__item_index footer__item__mail footer__item_right footer__link">
                    <img class="margin-right-10px footer__icon footer__icon_mail_index" src="../icons/mail.png" alt="">
                    <p class="footer-paragraph">lukidebut@mail.ru</p>
                </a>
                <a href="#" class="footer__item footer__item_index footer__item__vk footer__link margin-bottom-60px-imp">
                    <img class="margin-right-10px footer__icon footer__icon footer__icon_vk_index" src="../icons/vk.png" alt="">
                    <p class="footer-paragraph ">s.razmyslovich</p>
                </a>
            </div>
            <p class="footer__item footer__name">© 1984-2024 "А музы не молчат"</p>
        </div>
    </footer>
    <script src="js/script-news.js"></script>
    <script src="js/news_card.js"></script>
    </body>
    </html>