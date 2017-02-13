<?php
require_once('class.translation.php');

if(isset($_GET['lang']))
	$translate = new Translator($_GET['lang']);
else
	$translate = new Translator('ru');
?>
<?php include("email.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/media.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<link rel="stylesheet" type="text/css" href="css/animate.css">
<!--Ефекты-->
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/jquery.js"></script>
<title><?php $translate->__('Контакты'); ?></title>
</head>
<body>
<div id="wrapper">
<div id="header">	
<div id="menu" class="default">
<a id="log" class="navbar-brand" href="index.php"></a>
<ul class="glav_menu">
					<li><a href="index.php"><?php $translate->__('Главная'); ?></a></li>
					<li><a href="galery.php"><?php $translate->__('Галерея'); ?></a></li>
					<li><a href="news.php"><?php $translate->__('Услуги'); ?></a></li>
					<li><a href="contact.php"><?php $translate->__('Контакты'); ?></a></li>
</ul>
			<h1>
            <a class="flag_deutsch" title="<?php $translate->__('Украинский язык'); ?>" href="index.php?lang=de"></a>
            <a class="flag_english" title="<?php $translate->__('Руский язык'); ?>" href="index.php"></a>
            </h1>
</div>
<div id="slider-wrap">
<div class="grid">
<figure class="effect-layla">
<img class="" src="images/gr.jpg" alt="img01"/>
<figcaption class="img1">
								<h2><?php $translate->__('Мы поможем  создать уникальную мебель под Ваш интерьер'); ?></h2>
								<h3><?php $translate->__('Прокрутите вниз'); ?></h3>
<a href="#">View more</a>
</figcaption>            
</figure>
</div>

</div>
</div>
<div id="content">
<div class="contact_glav">
<div class="contact_name"><h2><?php $translate->__('Контакты'); ?></h2>
</div>
<div class="contact_text">
<ul><h3><?php $translate->__('Пишите нам:'); ?></h3>
<li><h4>yurpolskij@mail.ru</h4></li>
<li><h4>annuk2302@mail.ru</h4></li>
</ul>
<br>
<ul>
<h3><?php $translate->__('Звоните нам:'); ?></h3>
<li><h4>+38(097)-325-73-33</h4></li>
<li><h4>+38(063)-750-17-17</h4></li>
<li><h4>+38(073)-403-68-95</h4></li>
</ul>
<div class="map">
<h3><?php $translate->__('Нас можно легко найти по адресу:'); ?></h3><br>
<div class="maps">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=2dVdabZMuCLDjFvdRp3pRRoSGU3vnzSD&width=700&height=400&lang=ru_UA&sourceType=constructor&scroll=true"></script></div>
</div>
</div>
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
<label for="mail" title="<?php $translate->__('Отменить'); ?>">✕</label>
<div data-title="<?php $translate->__('Например, Мария Петровна'); ?>"><?php $translate->__('Ваше имя:'); ?> <input type='text' name='name' required /></div>
<div data-title="<?php $translate->__('Например, 380950235656'); ?>"><?php $translate->__('Моб. телефон:'); ?> <input type="tel" name='tel' required maxlength="11" value='380' /></div>
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
<a style="bottom: 50px; opacity: 0.8; display: inline; right: 30px;" class="scrollup" href="#"><img src="images/services/up1.png" height="64" width="64" alt="Р’РІРµСЂС…"></a>
</div>
</div>action="?action=signup"
<script>
// For Demo purposes only
[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
} );
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>