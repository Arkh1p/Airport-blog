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
          <h1>Тестирование на COVID-19</h1>
        </div>
      </div>
      <div class="container-fluid covid-container">
        <div class="covid-block">
          <h3>Обратите внимение!</h3>
          <p>Для прохождения теста у вас не должно быть температуры или признаков ОРВИ.</p>
        </div>
        <div class="covid-block">
          <h3>Предварительная подготовка</h3>
          <p>
            Минимум за 1 час до взятия мазков из ротоглотки (зева) не употреблять пищу, не пить, не курить, за 2 часа до исследования нельзя жевать жевательную резинку.
            <br><br>
            При повышении температуры тела (выше 37°) или наличии явных симптомов ОPВИ просьба обратиться в
            <br><br>
            Единый центр Роспотребнадзора по тел. 8 800 555 4943.
          </p>
        </div>
        <div class="covid-block">
          <h3>Номер телефона и email</h3>
          <form action="check_covid.php" method="POST" class="covid-form1">
            <div class="form-group covid-forms">
              <label>Номер телефона</label>
              <input id="phone_num" name="phone_num" type="tel" class="form-control covid-inputs" placeholder="Телефон">
            </div>
            <div class="form-group covid-forms">
              <label>Электронная почта</label>
              <input id="email" name="email" type="email" class="form-control covid-inputs" placeholder="Эл. почта">
            </div>

            <div class="form-group covid-forms" style="margin-top: 50px;">
              <label>ФИО</label>
              <input id="fio" name="fio" type="text" class="form-control covid-inputs">
            </div>
            <div class="form-group covid-forms">
              <label>Фамилия и имя на английском</label>
              <input id="fio_eng" name="fio_eng" type="text" class="form-control covid-inputs">
            </div>
            <div class="form-group covid-forms">
              <label>Пол</label>
              <select id="gender" name="gender" class="form-select covid-inputs" aria-label="select-gender">
                <option selected>Выбрать пол</option>
                <option value="1">Мужской</option>
                <option value="2">Женский</option>
              </select>
            </div>
            <div class="form-group covid-forms">
              <label>Дата рождения</label>
              <input id="birth" name="birth" type="date" class="form-control covid-inputs">
            </div>
            <div class="form-group covid-forms">
              <label>Адрес проживания</label>
              <input id="address" name="address" type="text" class="form-control covid-inputs">
            </div>
            <div class="form-group covid-forms">
              <label>Место работы или учебы</label>
              <input id="place_of_work" name="place_of_work" type="text" class="form-control covid-inputs">
            </div>
            <div class="form-group covid-forms">
              <label>Тип тестирования</label>
              <select id="test_type" name="test_type" class="form-select covid-inputs" aria-label="select-test">
                <option selected>Выбрать тип тестирования</option>
                <option value="1">Антиген коронавируса SARS-CoV-2</option>
                <option value="2">VIP ПЦР за 50 мин - 3 500 р</option>
                <option value="2">ПЦР за 24 часа - 1 800 руб.</option>
                <option value="2">ПЦР за 90 мин- 2 750 р</option>
              </select>
            </div>
            <button id="CovidSend" type="sumbit" class="btn btn-success" style="margin-top: 10px; margin-bottom: 100px;">Отправить</button>
          </form>
        </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts/formCovid.js"></script>
  </body>
</html>