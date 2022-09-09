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
          <h1>Оформление услуги</h1>
        </div>
      </div>
      <div class="container-fluid reg_of_service-container">
        <form action="check_booking.php" method="POST" style="margin-bottom: 200px;">
          <div class="ROS-card">
            <h1 class="ROS-card-title">Рейс</h1>
            <div class="form-group ROS-forms">
              <label for="ROS-form-1">Дата и время вылета</label>
              <input name="date_of_flight" type="datetime-local" class="form-control ROS-inputs" id="ROS-form-1">
            </div>
            <div class="form-group ROS-forms">
              <label for="ROS-form-1">Номер рейса</label>
              <input name="num_of_flight" type="num" class="form-control ROS-inputs" id="ROS-form-1" placeholder="Номер рейса">
            </div>
          </div>

          <div class="ROS-card">
            <h1 class="ROS-card-title">Пассажир 1</h1>
            <div class="form-group ROS-forms">
              <label for="ROS-form-1">Фамилия</label>
              <input name="pass1_surname" type="text" class="form-control ROS-inputs" id="ROS-form-1" placeholder="Фамилия">
            </div>
            <div class="form-group ROS-forms">
              <label for="ROS-form-1">Имя</label>
              <input name="pass1_name" type="text" class="form-control ROS-inputs" id="ROS-form-1" placeholder="Имя">
            </div>
          </div>

          <div class="ROS-card">
            <h1 class="ROS-card-title">Пассажир 2</h1>
            <div class="form-group ROS-forms">
              <label for="ROS-form-1">Фамилия</label>
              <input name="pass2_surname" type="text" class="form-control ROS-inputs" id="ROS-form-1" placeholder="Фамилия">
            </div>
            <div class="form-group ROS-forms">
              <label for="ROS-form-1">Имя</label>
              <input name="pass2_name" type="text" class="form-control ROS-inputs" id="ROS-form-1" placeholder="Имя">
            </div>
          </div>
          <button id="BookingSend" type="sumbit" class="btn btn-success">Заказать</button>
        </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>