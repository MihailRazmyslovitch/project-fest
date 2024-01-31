<?php
/* получим данные */
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
/* обработаем данные */
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);

$name = urldecode($name);
$phone = urldecode($phone);
$email = urldecode($email);

$name = trim($name);
$phone = trim($phone);
$email = trim($email);
/* отправим данные */
if (mail("flamingo_ritual@mail.ru", 
"Заявка с сайта", 
"Имя: ".$name."\n". 
"E-mail: ".$email."\n". 
"Телефон:".$phone."\n",
"From: no-reply@mydomain.ru \r\n"))

{ 
    echo ('Сообщение успешно отправлено!'); 
} 
else { 
    echo ('При отправке сообщения возникли ошибки');
}
?>