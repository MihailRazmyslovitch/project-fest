<?php
$host = "localhost";
$user = "root";
$password = "1234";
$database = "BorkiFestival_site";
$dbtable = "reviews";

$link = mysqli_connect($host, $user, $password, $database);

if($link == false){
    echo "Ошибка подключения!";
}