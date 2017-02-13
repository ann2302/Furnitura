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
<title><?php $translate->__('Услуги'); ?></title>
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
<div id="content">
<div class="sears_glav">
<div class="contact_name"><h2><?php $translate->__('Наши услуги'); ?></h2></div>
<div class="sears_glav_text">
<p><?php $translate->__('Начиная от первого звонка к нам, вы становитесь нашим уникальным и индивидуальным клиентом. К Вашим услугам проекты высококвалифицированных дизайнеров, новейшие разработки и современные технологии.'); ?>
<br><br><?php $translate->__('Производство мебели по индивидуальному заказу - процесс позволяющий Вам раскрыть свой творческий потенциал. И в результате получить уникальные предметы мебели, позволяющие сделать интерьер индивидуальным.'); ?> 
<br><br><?php $translate->__('Уникальность нашей системы организации работы состоит в четкой расстановке приоритетов и поэтапном контроле выполнения всех процессов от разработки до установки нашей мебели в предварительно согласованном месте. Это позволяет сэкономить время заказчика и своё собственное, выполнив весь комплекс работ в установленные сроки.'); ?></p>
</div>
<div class="sears_glav_imag">
<img src="" alt="">
</div>
<div class="sears1">
<a name="servers1"><h4><?php $translate->__('Выезд персонального менеджера-дизайнера на объект Заказчика'); ?></h4></a>
<p><?php $translate->__('Осуществляем выезд на объект Заказчика для проведения предварительного замера, консультаций по особенностям встроенных элементов мебели и её монтажу, подбору материалов для изделий на месте по образцам.'); ?></p>
</div>
<div class="sears_glav_imag_1">
<img src="" alt="">
</div>
<div class="sears2">
<a name="servers2"><h4><?php $translate->__('Современый дизайн'); ?></h4></a>
<p><?php $translate->__('Разработка дизайнерского проекта поможет заранее спланировать мебель, грамотно организовав имеющееся пространство. Индивидуальный подход к разработке мебели под заказ, позволяет нашим специалистам комплексно подойти к решению задачи и найти идеальный вариант конструкции, включая размеры вертикальных и горизонтальных деталей, а также ее глубину. Благодаря этому значительно уменьшается объем работ и, в конечном итоге, общая стоимость.<br>В услуги салона входи разработка проектов будущей мебели с учетом пожеланий и предпочтений Заказчика в эскизной графике для лучшего визуального восприятия.'); ?></p>
</div>
<div class="sears3">
<a name="servers3"><h4><?php $translate->__('Проектирование 3D     визуализация'); ?></h4></a>
<p><?php $translate->__('Предварительное компьютерное моделирование заказа дает возможность визуально оценить будущую мебель. Модели разрабатываются на основании значимых трендов современной мебельной моды и с индивидуальными предпочтениями.'); ?></p>
</div>
<div class="sears_glav_imag_2">
<img src="" alt="">
</div>
<div class="sears4">
<a name="servers4"><h4><?php $translate->__('Высокое качество'); ?></h4></a>
<p><?php $translate->__('Наш професионализм и мастерство столярного дела подкрепленое командой професионалов, делает наши изделия качествеными. Наши производственные возможности нацелены на получение качественного продукта.<br>Мы способны выполнить заказы в любых объемах и различных направлениях.'); ?></p>
</div>
<div class="sears5">
<a name="servers5"><h4><?php $translate->__('Доставка и монтаж'); ?></h4></a>
<p><?php $translate->__('Специалисты нашей компании успешно прововодят полный комплекс по монтажу и установке. Сборку и монтаж системы прововодят на месте у заказчика. В труднодоступных местах, где невозможно заехать траспортом, мы делаем сборку на месте.'); ?> </p>
</div>
<div class="sears_glav_imag_3">
<img src="" alt="">
</div>
<div class="sears6">
<a name="servers6"><h4><?php $translate->__('Сервис и гарантии'); ?></h4></a>
<p> <?php $translate->__('Все проекты имеют гарантию и подобираются с учетом Ваших потребностей. Уровень нашего клиентского сервиса соответствует запросам даже самых требовательных клиентов.'); ?></p>
</p>
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
<a style="bottom: 50px; opacity: 0.8; display: inline; right: 30px;" class="scrollup" href="#"><img src="images/services/up1.png" height="64" width="64" ></a>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>