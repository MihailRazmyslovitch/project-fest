<?php

$db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "root");
    $info = [];
    $id_db = 10;
$str = pathinfo(__FILE__, PATHINFO_FILENAME); // осторожно! необходима экранизация

echo pathinfo(__FILE__, PATHINFO_FILENAME);

if($query = $db->query("SELECT * FROM `news_cards` WHERE name_src LIKE '%$str%'")){
    $info = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
}else{
    print_r($db->ErrorInfo());
}

?>