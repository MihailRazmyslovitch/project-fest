<?php
$host = "localhost";
$user = "root";
$password = "root";
$database = "BorkiFestival_site";
if(isset($_POST['action']) && $_POST['action'] == 'delete') // есть action и он равен delete
{
    $link = mysqli_connect($host, $user, $password, $database);
    $sql = "DELETE FROM `program_day_1`"; // по одной инструкции удаления на каждую таблицу
    $res = mysqli_query($link, $sql);
    $sql = "DELETE FROM `program_day_2`";
    $res = mysqli_query($link, $sql);
    $sql = "DELETE FROM `program_day_1_widget`"; // по одной инструкции удаления на каждую таблицу
    $res = mysqli_query($link, $sql);
    $sql = "DELETE FROM `program_day_2_widget`";
    $res = mysqli_query($link, $sql);
    mysqli_close($link);
    header('location: program-admin.php');
}
if (isset($_POST['day']) && isset($_POST['widget_date_number']) && isset($_POST['widget_date']) && isset($_POST['widget_description'])){
    $day = strip_tags(trim($_POST['day']));
    if($day == '1'){
        $dbtable = "program_day_1_widget";
    }elseif($day == '2'){
        $dbtable = "program_day_2_widget";
    }
//переменные с формы
$widget_date_number = strip_tags(trim($_POST['widget_date_number']));
$widget_date = strip_tags(trim($_POST['widget_date']));
$widget_description = strip_tags(trim($_POST['widget_description']));

$link = mysqli_connect($host, $user, $password, $database);

    
$sql = "INSERT INTO ".$dbtable." (widget_date_number, widget_date, widget_description) VALUES ( '$widget_date_number', '$widget_date', '$widget_description')";

//внесём данные с формы в БД
$res = mysqli_query($link, $sql);

mysqli_close($link);
header('location: program-admin.php');
}

if (isset($_POST['date']) && isset($_POST['day']) && isset($_POST['time']) && isset($_POST['place']) && isset($_POST['description'])){
    $day = strip_tags(trim($_POST['day']));
    if($day == '1'){
        $dbtable = "program_day_1";
    }elseif($day == '2'){
        $dbtable = "program_day_2";
    }
//переменные с формы
$date = strip_tags(trim($_POST['date']));
$time = strip_tags(trim($_POST['time']));
$description = strip_tags(trim($_POST['description']));
$place = strip_tags(trim($_POST['place']));

$link = mysqli_connect($host, $user, $password, $database);

    
$sql = "INSERT INTO ".$dbtable." (time, description, date, place) VALUES ('$time', '$description',  '$date', '$place')";

//внесём данные с формы в БД
$res = mysqli_query($link, $sql);

mysqli_close($link);
header('location: program-admin.php');
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
                        <a class="navigation__link" href="../admin/admin-input-true.html">главная</a>
                    </li>
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
                            <a class="style-link margin-right-10px" href="../admin/program-admin.php">Панель администрирования</a>
                        </div>
                        <h2 class="title margin-bottom-80px">Добро пожаловать на страницу администрирования программы фестиваля!</h2>
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
                            $db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "root");
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
                            $db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "root");
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
        <div class="form-flex-center">
    <form action="program-admin.php" method="POST" id="form-admin" class="form__admin form__admin_program">
        <h2 class="title-footer margin-bottom-40px">
            Введите изменения
        </h2>
        <div class="form__group">
        <input type="text" class="form__input form_login" placeholder="Напечатайте '1' или '2' - это выбор дня" name="day" id="day" required/>
        </div>
        <div class="form__group">
        <input type="text" class="form__input form_login" placeholder="Измените дату '2 мая 2025'" name="date" id="date"/>
        </div>
        <div class="form__group">
        <input type="text" class="form__input form_login" placeholder="Введите время мероприятия '19.00-20.00'" name="time" id="time" required/>
        </div>
        <div class="form__group">
        <input type="text" class="form__input form_login" placeholder="Где будет проходить мероприятие" name="place" id="place" required/>
        </div>
        <div class="form__group">
        <textarea type="text" class="form__input form__input_big form_password" placeholder="Введите описание мероприятия" id="description" name="description" required></textarea>
        </div>
        <div class="form__desc form__desc_red margin-bottom-50px">
          </div>
        <div class="form__groop">
          <button type="submit" class="btn_animated btn-form margin-bottom-20px">ОТПРАВИТЬ</button>
        </div>
      </form>
      <form action="program-admin.php" method="POST" id="form-admin" class="form__admin form__admin_program">
          <h2 class="title-footer margin-bottom-40px">
            Введите изменения в виджет
        </h2>
        <div class="form__group">
        <input type="text" class="form__input form_login" placeholder="Напечатайте '1' или '2' - это выбор дня" name="day" id="day" required/>
        </div>
        <div class="form__group">
        <input type="text" class="form__input form_login" placeholder="Введите число даты '2'" name="widget_date_number" id="widget_date_number" required/>
        </div>
        <div class="form__group">
        <input type="text" class="form__input form_login" placeholder="Введите число дату 'мая 2025'" name="widget_date" id="widget_date" required/>
        </div>
        <div class="form__group">
        <textarea type="text" class="form__input form__input_big form_password" placeholder="Введите краткое описание" id="widget_description" name="widget_description" required></textarea>
        </div>
        <div class="form__groop">
          <button type="submit" class="btn_animated btn-form margin-bottom-20px">ОТПРАВИТЬ</button>
        </div>
      </form>
      <form action="program-admin.php" method="POST" id="form-admin" class="form__admin form__admin_program">
        <div class="form__groop">
            <button type="hidden" name="action" id="action" value="delete" class="btn_animated btn_delete">Удалить все</button>
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
    <script src="js/script-program.js"></script>
    </body>
    </html>