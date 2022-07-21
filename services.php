<!DOCTYPE html>
<html lang="RU" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Услуги | Гилея</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css?ver=21"/>
    <link rel="stylesheet" type="text/css" href="css/services.css?ver=11" />
    <link rel="stylesheet" type="text/css" href="css/mobile.css?ver=3"/>
    <link rel="shortcut icon" href="img/321.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <body>
    
    <div class="all">
      <header>
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
        <hr class="hr1">
      </header>
      <main>
        <div class="all2" ><div class="White_fon">

  	      <div class="services_block">           
  	      	
  	      <center class="Ser_name">ООО "Гилея" оказывает услуги:</center>
          <p>1. Консультационная помощь по вопросам охраны окружающей среды и соблюдения экологического законодательства</p>
          <p>2. Экологический аудит</p>
          <p>3. Комплексное экологическе сопровождение предприятия.</p>
          <p>4. Также разработка экологической документации и отчетности:</p>
  	      <div class="services_li">
            <li>Постановка объекта, оказывающего негативное воздействие на окружающую среду, на государственный учет</li>

						<li>Паспорт отходов I - IV классов опасности</li>

						<li>Декларация о плате за негативное воздействие на окружающую среду</li>

						<li>Журнал учета движения отходов </li>

						<li>Отчет по форме 2-тп (отходы)</li>

						<li>Отчет по форме 2-тп (воздух)</li>

						<li>Отчет по форме 2-тп (водхоз)</li>

						<li>Отчет по форме 4-ОС</li>

						<li>Отчет об организации и о результатах осуществления производственного экологического контроля в соответствии с приказом Минприроды России от 28.02.2018 №74</li>						

						<li>Программа производственного экологического контроля в соответствии с приказом Минприроды России от 28.02.2018 №74</li>
															

						<li>Проект нормативов предельно допустимых выбросов (ПДВ) загрязняющих веществ в атмосферный воздух</li>

						<li>Проект санитарно-защитной зоны (СЗЗ)</li>

						<li>Разработка мероприятий при неблагоприятных метеорологических условиях (НМУ)</li>

						<li>Проект нормативов образования отходов и лимитов на их размещение (ПНООЛР)</li>
						
						<li>Лицензия на право обращения с отходами (сбор, транспортирование, обработка, утилизация, обезвреживание, размещение отходов I - IV классов опасности)</li>	

					</div></div><br>     


					<div class="form">
						<font color="#38963e">Записаться на консультацию</font>
						<form>

							<input type="hidden" name="project_name" value="Gilea">
							<input type="hidden" name="admin_email" value="elviramubarakova8@gmail.com">
							<input type="hidden" name="form_subject" value="Заявка">

							<p><input class="message" type="text" name="Имя" placeholder="Ваше имя..." required></p>
							<p><input class="message" type="text" name="E-mail" placeholder="Ваш E-mail..." required></p>

							<div class="question" >								
								<div>
									<textarea id="address" name="Вопрос" rows=5 required placeholder="Ваш вопрос..."></textarea>
								</div>
							</div>

							<button>Отправить</button>
							<br>

						</form>

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
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/Form_script.js"></script>
    <script src="js/mobile.js"></script>
  </body>
</html>
