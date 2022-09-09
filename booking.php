<?php
  require_once __DIR__ . '/libs/db.php';
  require_once __DIR__ . '/libs/api.php';
  $vip_halls = get_vip_halls();
  $vip_escorts = get_vip_escort();
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Basic CSS -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Atlata Airport</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="d-flex align-items-center">
      <div class="container-fluid"> 
        <div class="header-container d-flex justify-content-between align-items-center">
          <a href="index.php"><img src="img/logo.svg"></a>
          <a href="booking.php">Онлайн бронирование VIP и бизнес-залов</a>
          <a href="covid.php">Тестирование на COVID-19</a>
        </div>
      </div>
    </header>
    <main>
      <div class="heading d-flex flex-wrap align-content-end justify-content-start">
        <div class="container-fluid">
          <h1>Онлайн бронирование VIP и бизнес-залов</h1>
        </div>
      </div>
      <div class="container-fluid booking-container">
        <h1 class="h1-heading">VIP зал</h1>

        <?php foreach ($vip_halls as $vip_hall):?>
          <div class="bron-card d-flex">
            <img src="<?=$vip_hall['img']?>" class="bron-card-img">
            <div class="bron-card-descr">
              <div class="bron-card-row1 d-flex justify-content-between">
                <h3><?=$vip_hall['title']?></h3>
                <span><?=$vip_hall['cost']?> ₽</span>
              </div>
              <p class="bron-card-text">
              <?=$vip_hall['descr']?>
              </p>
              <div class="d-flex justify-content-end">
                <a href="reg_of_service.php" type="button" class="btn btn-outline-primary d-flex align-items-center">Заказать</a>
              </div>
            </div>
          </div>
        <?php endforeach;?>

        <h1 class="h1-heading" style="margin-top: 100px;">Индивидуальное сопровождение</h1>

        <?php foreach ($vip_escorts as $vip_escort):?>
          <div class="bron-card d-flex">
            <img src="<?=$vip_escort['img']?>" class="bron-card-img">
            <div class="bron-card-descr">
              <div class="bron-card-row1 d-flex justify-content-between">
                <h3><?=$vip_escort['title']?></h3>
                <span><?=$vip_escort['cost']?> ₽</span>
              </div>
                <p class="bron-card-text">
                <?=$vip_escort['descr']?>
                </p>
                <div class="d-flex justify-content-end">
                  <a href="reg_of_service.php" type="button" class="btn btn-outline-primary d-flex align-items-center
                  ">Заказать</a>
                </div>
            </div>
          </div>
        <?php endforeach;?>

      </div>
    </main>
    <footer class="d-flex align-items-center">
      <div class="container-fluid">
        <div class="footer-row-1 d-flex flex-row justify-content-between align-items-center">
          <a href="index.php"><img src="img/logo footer.svg"></a>
          <div class="social-media d-flex align-items-center">
            <a href="#"><img src="img/vk.svg"></a>
            <a href="#"><img src="img/fb.svg"></a>
            <a href="#"><img src="img/inst.svg"></a>
          </div>
          <span class="footer-num">+7 (999) 999-99-99</span>  
        </div>
        <div class="footer-row-2 d-flex flex-row justify-content-between align-items-center">
          <span class="footer-info1">© 2022 АО «Международный аэропорт Atlata»</span>
          <div class="footer-info2 d-flex justify-content-between" style="width: 245px;">
            <a href="contacts.html">Обратная связь</a>
            <a href="account.html">Сотрудникам</a>
          </div>
          <span class="footer-info3 d-flex justify-content-end">Site by Arkhipov Roman</span>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>