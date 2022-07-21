<!DOCTYPE html>
<html lang="RU" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Гилея</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css?ver=21"/>
    <link rel="stylesheet" type="text/css" href="css/mobile.css?ver=3"/>
    <link rel="shortcut icon" href="img/321.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
  <body>

    <div class="all">
      <header class="index_header">
        <div class="container">
          <a href="index.php"><img src="img/Гилея.png" width="140" height="40" class="logo" alt="Гилея"></img></a>
          <div class="pochta">
            gilea-kazan@mail.ru
          </div>
          <div class="zero"></div>
          <div class="quote">Живи в гармонии с природой</div>
          

          <!-- навигация -->
          <?php 
          include('nav.php') ?>

          

          <!-- Кнопка для мобильной навигации -->
          <div id="menu-togle" class="menu-icon">
            <div class="menu-icon-line"></div>
          </div>

          <!-- Мобильная навигация -->

          <?php 
          include('mobile_nav.php') ?>


        </div>
        <hr class="index_hr1">
      </header>
      <main>
        <div class="all2">
          <p class="round"><img class="kryg" src="img/123.png" width="380" height="380" alt="round"></img></p>
          <div class="hr_sentence">
            <hr class="hr2">
            <div class="sentence">Оценка негативного воздействия на окружающую среду и разработка экологической документации</div>
          </div>
        </div>
      </main>
    </div>
    <footer class="footer_index">
      <div class="footerbox">
        Гилея<br>
        gilea-kazan@mail.ru<br>
        &#169; 2020, gilea.ru
      </div>
    </footer>
    <script src="js/mobile.js"></script>
  </body>
</html>
