<?php
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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font.css">
</head>
<body>
  <section class="admin">
    <form action="admin.php" method="POST" id="form-admin" class="form__admin">
        <div class="margin-bottom-40px">
        <h2 class="title-footer">
            Войдите в систему
        </h2>
        </div>
        <div class="form__group">
        <input type="text" class="form__input form_login" placeholder="Логин" name="login" id="login" required/>
        </div>
        <div class="form__group">
        <textarea type="text" class="form__input form__input_big form_password" placeholder="Пароль" id="password" name="password" required></textarea>
        </div>
        <div class="form__desc form__desc_red margin-bottom-50px">
        <?php
        if (isset($_POST['login']) && isset($_POST['password'])):
          $login = strip_tags(trim($_POST['login']));
          $password = strip_tags(trim($_POST['password']));
          $db = new PDO(dsn:"mysql:host=localhost;dbname=BorkiFestival_site", username:"root", password: "root");
          $info = [];
          if($query = $db->query("SELECT `login`, `password` FROM `admin`")){
              $info = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
          }else{
              print_r($db->ErrorInfo());
          }
            foreach($info as $data):
              if($data["login"] == $login && $data["password"] == $password){
                header('location: admin/admin-input-true.html');
              }if ($data["login"] !== $login || $data["password"] !== $password): ?>
              Данные введены неверно!        
            <?php endif; endforeach; endif;?>
          </div>
        <div class="form__groop">
          <button type="submit" class="btn_animated btn-form">ВОЙТИ</button>
        </div>
      </form>
</section>
    <script src="js/admin.js"></script>
    </body>
    </html>