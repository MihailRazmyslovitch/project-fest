<?php
$host = "localhost";
$user = "root";
$password = "1234";
$database = "BorkiFestival_site";
$dbtable = "reviews";

if (isset($_POST['name']) && isset($_POST['text'])){
//переменные с формы
$name = strip_tags(trim($_POST['name']));
$text = strip_tags(trim($_POST['text']));

$link = mysqli_connect($host, $user, $password, $database);
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
    
$sql = "INSERT INTO ".$dbtable." (name, text, date) VALUES ('$name', '$text', '$date')";

//внесём данные с формы в БД
$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: ../reviews.php');
}