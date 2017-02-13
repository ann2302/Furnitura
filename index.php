<?php
require_once('class.translation.php');

if(isset($_GET['lang']))
	$translate = new Translator($_GET['lang']);
else
	$translate = new Translator('ru');
?>
<?php include("email.php"); ?>
<!DOCTYPE html>
<html xml:lang="ru" lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="https://www.google.com/jsapi" type="text/javascript"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.jcarousellite.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>	
	<script src="https://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">google.load('jquery', '1.4.1');</script>
	<title><?php $translate->__('Главная'); ?></title>
	
</head>
<body>
	<div id="wrapper">
		<div id="header">					
			<div id="menu" class="default">
				<a id="logo" class="navbar-brand" href="index.html"></a>
				<nav class="nav">
				<ul class="glav_menu">
					<li><a href="index.php"><?php $translate->__('Главная'); ?></a></li>
					<li><a href="galery.php"><?php $translate->__('Галерея'); ?></a></li>
					<li><a href="news.php"><?php $translate->__('Услуги'); ?></a></li>
					<li><a href="contact.php"><?php $translate->__('Контакты'); ?></a></li>
				</ul>
				</nav>
			<h1>
            <a class="flag_deutsch" title="<?php $translate->__('Украинский язык'); ?>" href="index.php?lang=de"></a>
            <a class="flag_english" title="<?php $translate->__('Руский язык'); ?>" href="index.php"></a>
            </h1>
			</div>
			<div id="slider-wrap">
				<div id="slider">
					<div class="slide slide1 grid">
						<figure class="effect-layla">
							<img class="" src="images/gr.jpg" alt="img01"/>
							<figcaption class="img1">
								<h2><?php $translate->__('Мы поможем  создать уникальную мебель под Ваш интерьер'); ?></h2>
								<h3><?php $translate->__('Прокрутите вниз'); ?></h3>
								<a href="#">View more</a>
							</figcaption>            
						</figure>
					</div>
					<div class="slide slide3 grid">
						<figure class="effect-layla">
							<img class="" src="images/rezba.jpg" alt="img01"/>
							<figcaption class="img3">
								<h2><?php $translate->__('Мы готовы к реализации самых смелых идей  проектов и ваших творческих замыслов'); ?> </h2>
								<h3><?php $translate->__('Прокрутите вниз'); ?></h3>
								<a href="#">View more</a>
							</figcaption>            
						</figure>
					</div>
					<div class="slide slide2 grid">
						<figure class="effect-layla">
							<img class="" src="images/falegnameria_milano.jpg"   alt="img01"/>
							<figcaption class="img2">
								<h2><?php $translate->__('Сделаем комфорт частью повседневной жизни максимально эффективно организовав пространство'); ?></h2>
								<h3><?php $translate->__('Прокрутите вниз'); ?></h3>
								<a href="#">View more</a>
							</figcaption>            
						</figure>
					</div>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="services">
				<div class="services_name">
					<h2><?php $translate->__('Наши услуги'); ?></h2>
				</div>
				<a href="news.html#servers1">
					<div class="serv1">
						<p><?php $translate->__('Выезд мастера на замеры'); ?></p>
					</div>
				</a>
				<a href="news.html#servers2">
					<div class="serv2">
						<p><?php $translate->__('Доставка и Монтаж'); ?></p>
					</div>
				</a>
				<a href="news.html#servers3">
					<div class="serv3">
						<p><?php $translate->__('Проектирование 3D     визуализация'); ?></p>
					</div>
				</a>
				<a href="news.html#servers4">
					<div class="serv4">
						<p><?php $translate->__('Качество 100%'); ?></p>
					</div>
				</a>
				<a href="news.html#servers5">
					<div class="serv5">
						<p><?php $translate->__('Покраска изделий по итальянской технологии'); ?></p>
					</div>
				</a>
				<a href="news.html#servers6">
					<div class="serv6">
						<p><?php $translate->__('Сервис и гарантии'); ?></p>
					</div>
				</a>
			</div>
			<div class="proectirovka">
				<hr>
				<div class="proectirovka_glav_imag ">
				</div>								
				<h2><?php $translate->__('О нас'); ?></h2>
				<p><?php $translate->__('Мы готовы к реализации самых смелых идей и проектов, как наших дизайнеров, так и ваших творческих замыслов. Мы предлагает  услуги мебельного производства по изготовлению (кухни, прихожие, шкафы — купе, спальные гарнитуры, комоды и т. д.), но и дизайнерскую мебель (эксклюзивные кровати, тумбы, столы, шифоньеры, встроенную мебель, угловую мебель и любую другую) по  размеру заказчика и стандартных размеров.'); ?> 
				<br><br><?php $translate->__('Предоставляем услуги  мебельного производства по изготовлению любой мебели по индивидуальному размеру и различных материалов. Расчет стоимости, замер, доставка, изготовление дизайн - проекта мебели осуществляются нашим дизайнером.'); ?></p>
				</div>
				<div class="galeri">
					<div class="galeri_name">
						<h2><?php $translate->__('Наши роботы'); ?></h2>
					</div>
					<div class="os_galeri">
						<input type="checkbox" id="pic-1"/>
						<label for="pic-1" class="lightbox"><img src="images/двери2.jpg" /></label>
						<input type="checkbox" id="pic-2"/>
						<label for="pic-2" class="lightbox"><img src="images/Комод3.jpg" /></label>
						<input type="checkbox" id="pic-3"/>
						<label for="pic-3" class="lightbox"><img src="images/Кухня32.jpg"/></label>
						<input type="checkbox" id="pic-4"/>
						<label for="pic-4" class="lightbox"><img src="images/Стол11.jpg"/></label>
						<input type="checkbox" id="pic-5"/>
						<label for="pic-5" class="lightbox"><img src="images/проект6.jpg"/></label>
						<input type="checkbox" id="pic-6"/>
						<label for="pic-6" class="lightbox"><img src="images/шкаф22.jpg"/></label>
						<input type="checkbox" id="pic-7"/>
						<label for="pic-7" class="lightbox"><img src="images/шкаф5.jpg" /></label>
						<input type="checkbox" id="pic-8"/>
						<label for="pic-8" class="lightbox"><img src="images/Кухня64.jpg" /></label>
						<div class="grid1_gl">
							<label for="pic-1" class="grid-item1_gl"><img src="images/двери2.jpg"/></label>
							<label for="pic-2" class="grid-item1_gl"><img src="images/Комод3.jpg"/></label>
							<label for="pic-3" class="grid-item1_gl"><img src="images/Кухня32.jpg"/></label>
							<label for="pic-4" class="grid-item1_gl"><img src="images/Стол11.jpg"/></label>
							<label for="pic-5" class="grid-item1_gl"><img src="images/проект6.jpg"/></label>
							<label for="pic-6" class="grid-item1_gl"><img src="images/шкаф22.jpg"/></label>
							<label for="pic-7" class="grid-item1_gl"><img src="images/шкаф5.jpg"/></label>
							<label for="pic-8" class="grid-item1_gl"><img src="images/Кухня64.jpg"/></label>
						</div>
					</div>
					<a href="galery.php"><button name="Все роботы"><?php $translate->__('Галерея'); ?></button></a>
				</div>
				<div class="contact">
					<div class="call">
						<h4><?php $translate->__('Оставте заявку и мы с вами свяжимся'); ?></h4>
						<ul>
							<li><b>yurpolskij@mail.ru</b></li>
							<br>
							<li><b>annuk2302@mail.ru</b></li>
						</ul>	
						<div class="call_img"></div>
					</div>
					<h3><?php $translate->__('ИЛИ'); ?></h3>
					<div class="back_call">
						<h4><?php $translate->__('Закажите обратный звонок'); ?></h4>
						<a><button><input type="checkbox" id="mail"/><label for="mail"><?php $translate->__('Заказать звонок'); ?></label>
							<div id="popup">
								<form method="post" action="mail.php">
									<label for="mail" title="Отменить">✕</label>
									<div data-title="<?php $translate->__('Например, Мария Петровна'); ?>"><?php $translate->__('Ваше имя:'); ?> <input type='text' name='name' required /></div>
									<div data-title="<?php $translate->__('Например, 380950235656'); ?>"><?php $translate->__('Моб. телефон:'); ?> <input type="tel" name='tel' required maxlength="12" value='380' /></div>
									<input class="but" type='submit' value="<?php $translate->__('Заказать'); ?>"/>
								</form>
							</div></button></a>
							<div class="back_call_img"></div>
						</div>
					</div>
				</div>
				<div id="footer">
					<form class="podpisas" id="newsletter-signup" action="?action=signup" method="post">
						<fieldset>
							<label for="signup-email"><?php $translate->__('Подпишитесь на рассылку по e-mail новостей, предложений и событий:'); ?></label>
							<input type="text" name="signup-email" id="signup-email" />
							<input type="submit" id="signup-button" value="<?php $translate->__('Подписаться!'); ?>" />
							<p id="signup-response"></p>
						</fieldset>
					</form>
					<div class="footer_text">
						<h2><?php $translate->__('Wood robots - лучший выбор для ваших идей!'); ?></h2>
					</div>
					<a style="bottom: 50px; opacity: 0.8; display: inline; right: 30px;" class="scrollup" href="#"><img src="images/services/up1.png" height="64" width="64" alt=""></a>
				</div>
			</div>
			<script src="js/script.js"></script>
		</body>
		</html>
