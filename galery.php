<?php
require_once('class.translation.php');

if(isset($_GET['lang']))
$translate = new Translator($_GET['lang']);
else
$translate = new Translator('ru');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/media.css">
<link rel="stylesheet" href="css/gal.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<script src="js/jquery.js"></script>
<title><?php $translate->__('Галерея'); ?></title>
</head>
<body style="overflow-y:hidden;">
<div id="wrapper">
<div id="header_galery">
<div id="galery_menu" class="default">
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
</div>
<div id="content_galery">
<div class="galery_type">
<div class="accordion horizontal">
<section active>
<h3><a href="#" onclick="openbox('door'); return false" ><?php $translate->__('Авторские двери'); ?></a></h3>
</section>
<section >
<h3><a href="#" onclick="openbox('stairs'); return false"><?php $translate->__('Деревяные лестницы'); ?></a></h3>
</section>
<section >
<h3><a href="#" onclick="openbox('komod'); return false"><?php $translate->__('Комоды'); ?></a></h3>
</section>
<section >
<h3><a href="#" onclick="openbox('prog'); return false"><?php $translate->__('Компьютерные проекты'); ?></a></h3>
</section>
<section>
<h3><a href="#" onclick="openbox('chicken'); return false"><?php $translate->__('Кухни'); ?></a></h3>
</section>
<section>
<h3><a href="#" onclick="openbox('restavration'); return false"><?php $translate->__('Реставрация'); ?></a></h3>
</section>
<section>
<h3><a href="#" onclick="openbox('table'); return false"><?php $translate->__('Столы'); ?></a></h3>
</section>
<section>
<h3><a href="#" onclick="openbox('shkaf'); return false"><?php $translate->__('Шкафы Купе'); ?></a></h3>
</section>

</div>
</div>
<div  class="sec1" id="door" style="display: none;">
<input type="checkbox" id="pic-1"/>
<label for="pic-1" class="lightbox"><img src="images\ДВЕРИ\двери1.jpg" /></label>
<input type="checkbox" id="pic-2"/>
<label for="pic-2" class="lightbox"><img src="images\ДВЕРИ\двери2.jpg" /></label>
<input type="checkbox" id="pic-3"/>
<label for="pic-3" class="lightbox"><img src="images\ДВЕРИ\двери3.jpg"/></label>
<input type="checkbox" id="pic-4"/>
<label for="pic-4" class="lightbox"><img src="images\ДВЕРИ\двери4.jpg"/></label>
<input type="checkbox" id="pic-5"/>
<label for="pic-5" class="lightbox"><img src="images\ДВЕРИ\двери5.jpg"/></label>
<input type="checkbox" id="pic-6"/>
<label for="pic-6" class="lightbox"><img src="images\ДВЕРИ\двери6.jpg"/></label>
<input type="checkbox" id="pic-7"/>
<label for="pic-7" class="lightbox"><img src="images\ДВЕРИ\двери7.jpg" /></label>
<input type="checkbox" id="pic-8"/>
<label for="pic-8" class="lightbox"><img src="images\ДВЕРИ\двери8.jpg" /></label>
<input type="checkbox" id="pic-9"/>
<label for="pic-9" class="lightbox"><img src="images\ДВЕРИ\двери9.jpg" /></label>
<input type="checkbox" id="pic-10"/>
<label for="pic-10" class="lightbox"><img src="images\ДВЕРИ\двери10.jpg" /></label>
<input type="checkbox" id="pic-11"/>
<label for="pic-11" class="lightbox"><img src="images\ДВЕРИ\двери11.jpg" /></label>
<input type="checkbox" id="pic-12"/>
<label for="pic-12" class="lightbox"><img src="images\ДВЕРИ\двери12.jpg" /></label>
<input type="checkbox" id="pic-13"/>
<label for="pic-13" class="lightbox"><img src="images\ДВЕРИ\двери13.jpg" /></label>
<input type="checkbox" id="pic-14"/>
<label for="pic-14" class="lightbox"><img src="images\ДВЕРИ\двери14.jpg" /></label>
<input type="checkbox" id="pic-15"/>
<label for="pic-15" class="lightbox"><img src="images\ДВЕРИ\двери15.jpg" /></label>
<input type="checkbox" id="pic-16"/>
<label for="pic-16" class="lightbox"><img src="images\ДВЕРИ\двери16.jpg" /></label>
<input type="checkbox" id="pic-17"/>
<label for="pic-17" class="lightbox"><img src="images\ДВЕРИ\двери17.jpg" /></label>
<input type="checkbox" id="pic-18"/>
<label for="pic-18" class="lightbox"><img src="images\ДВЕРИ\двери18.jpg" /></label>
<input type="checkbox" id="pic-19"/>
<label for="pic-19" class="lightbox"><img src="images\ДВЕРИ\двери19.jpg" /></label>
<input type="checkbox" id="pic-20"/>
<label for="pic-20" class="lightbox"><img src="images\ДВЕРИ\двери20.jpg" /></label>
<input type="checkbox" id="pic-21"/>
<label for="pic-21" class="lightbox"><img src="images\ДВЕРИ\двери21.jpg" /></label>
<input type="checkbox" id="pic-22"/>
<label for="pic-22" class="lightbox"><img src="images\ДВЕРИ\двери22.jpg" /></label>
<input type="checkbox" id="pic-23"/>
<label for="pic-23" class="lightbox"><img src="images\ДВЕРИ\двери23.jpg" /></label>
<input type="checkbox" id="pic-24"/>
<label for="pic-24" class="lightbox"><img src="images\ДВЕРИ\двери24.jpg" /></label>
<input type="checkbox" id="pic-25"/>
<label for="pic-25" class="lightbox"><img src="images\ДВЕРИ\двери25.jpg" /></label>
<input type="checkbox" id="pic-26"/>
<label for="pic-26" class="lightbox"><img src="images\ДВЕРИ\двери26.jpg" /></label>
<input type="checkbox" id="pic-27"/>
<label for="pic-27" class="lightbox"><img src="images\ДВЕРИ\двери27.jpg" /></label>

<div class="grid1">
<label for="pic-1" class="grid-item1"><img src="images\ДВЕРИ\двери1.jpg"/></label>
<label for="pic-2" class="grid-item1"><img src="images\ДВЕРИ\двери2.jpg"/></label>
<label for="pic-3" class="grid-item1"><img src="images\ДВЕРИ\двери3.jpg"/></label>
<label for="pic-4" class="grid-item1"><img src="images\ДВЕРИ\двери4.jpg"/></label>
<label for="pic-5" class="grid-item1"><img src="images\ДВЕРИ\двери5.jpg"/></label>
<label for="pic-6" class="grid-item1"><img src="images\ДВЕРИ\двери6.jpg"/></label>
<label for="pic-7" class="grid-item1"><img src="images\ДВЕРИ\двери7.jpg"/></label>
<label for="pic-8" class="grid-item1"><img src="images\ДВЕРИ\двери8.jpg"/></label>
<label for="pic-9" class="grid-item1"><img src="images\ДВЕРИ\двери9.jpg"/></label>
<label for="pic-10" class="grid-item1"><img src="images\ДВЕРИ\двери10.jpg"/></label>
<label for="pic-11" class="grid-item1"><img src="images\ДВЕРИ\двери11.jpg"/></label>
<label for="pic-12" class="grid-item1"><img src="images\ДВЕРИ\двери12.jpg"/></label>
<label for="pic-13" class="grid-item1"><img src="images\ДВЕРИ\двери13.jpg"/></label>
<label for="pic-14" class="grid-item1"><img src="images\ДВЕРИ\двери14.jpg"/></label>
<label for="pic-15" class="grid-item1"><img src="images\ДВЕРИ\двери15.jpg"/></label>
<label for="pic-16" class="grid-item1"><img src="images\ДВЕРИ\двери16.jpg"/></label>
<label for="pic-17" class="grid-item1"><img src="images\ДВЕРИ\двери17.jpg"/></label>
<label for="pic-18" class="grid-item1"><img src="images\ДВЕРИ\двери18.jpg"/></label>
<label for="pic-19" class="grid-item1"><img src="images\ДВЕРИ\двери19.jpg"/></label>
<label for="pic-20" class="grid-item1"><img src="images\ДВЕРИ\двери20.jpg"/></label>
<label for="pic-21" class="grid-item1"><img src="images\ДВЕРИ\двери21.jpg"/></label>
<label for="pic-22" class="grid-item1"><img src="images\ДВЕРИ\двери22.jpg"/></label>
<label for="pic-23" class="grid-item1"><img src="images\ДВЕРИ\двери23.jpg"/></label>
<label for="pic-24" class="grid-item1"><img src="images\ДВЕРИ\двери24.jpg"/></label>
<label for="pic-25" class="grid-item1"><img src="images\ДВЕРИ\двери25.jpg"/></label>
<label for="pic-26" class="grid-item1"><img src="images\ДВЕРИ\двери26.jpg"/></label>
<label for="pic-27" class="grid-item1"><img src="images\ДВЕРИ\двери27.jpg"/></label>
</div>
</div>
<div class="sec2" id="stairs" style="display: none;">

<input type="checkbox" id="pic-28"/>
<label for="pic-28" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница1.jpg" /></label>
<input type="checkbox" id="pic-29"/>
<label for="pic-29" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница2.jpg" /></label>
<input type="checkbox" id="pic-30"/>
<label for="pic-30" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница3.jpg"/></label>
<input type="checkbox" id="pic-31"/>
<label for="pic-31" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница4.jpg"/></label>
<input type="checkbox" id="pic-32"/>
<label for="pic-32" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница5.jpg"/></label>
<input type="checkbox" id="pic-33"/>
<label for="pic-33" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница6.jpg"/></label>
<input type="checkbox" id="pic-34"/>
<label for="pic-34" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница7.jpg" /></label>
<input type="checkbox" id="pic-35"/>
<label for="pic-35" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница8.jpg" /></label>
<input type="checkbox" id="pic-36"/>
<label for="pic-36" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница9.jpg" /></label>
<input type="checkbox" id="pic-37"/>
<label for="pic-37" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница10.jpg" /></label>
<input type="checkbox" id="pic-38"/>
<label for="pic-38" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница11.jpg" /></label>
<input type="checkbox" id="pic-39"/>
<label for="pic-39" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница12.jpg" /></label>
<input type="checkbox" id="pic-40"/>
<label for="pic-40" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница13.jpg" /></label>
<input type="checkbox" id="pic-41"/>
<label for="pic-41" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница14.jpg" /></label>
<input type="checkbox" id="pic-42"/>
<label for="pic-42" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница15.jpg" /></label>
<input type="checkbox" id="pic-43"/>
<label for="pic-43" class="lightbox"><img src="images\ЛЕСТНИЦЫ\лестница16.jpg" /></label>
<div class="grid1">
<label for="pic-28" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница1.jpg"/></label>
<label for="pic-29" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница2.jpg"/></label>
<label for="pic-30" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница3.jpg"/></label>
<label for="pic-31" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница4.jpg"/></label>
<label for="pic-32" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница5.jpg"/></label>
<label for="pic-33" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница6.jpg"/></label>
<label for="pic-34" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница7.jpg"/></label>
<label for="pic-35" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница8.jpg"/></label>
<label for="pic-36" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница9.jpg"/></label>
<label for="pic-37" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница10.jpg"/></label>
<label for="pic-38" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница11.jpg"/></label>
<label for="pic-39" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница12.jpg"/></label>
<label for="pic-40" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница13.jpg"/></label>
<label for="pic-41" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница14.jpg"/></label>
<label for="pic-42" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница15.jpg"/></label>
<label for="pic-43" class="grid-item1"><img src="images\ЛЕСТНИЦЫ\лестница16.jpg"/></label>
</div>
</div>
<div class="sec3" id="komod" style="display: none;">
<input type="checkbox" id="pic-44"/>
<label for="pic-44" class="lightbox"><img src="images\Комоды\Комод1.jpg"/></label>
<input type="checkbox" id="pic-45"/>
<label for="pic-45" class="lightbox"><img src="images\Комоды\Комод2.jpg" /></label>
<input type="checkbox" id="pic-46"/>
<label for="pic-46" class="lightbox"><img src="images\Комоды\Комод3.jpg"/></label>
<input type="checkbox" id="pic-47"/>
<label for="pic-47" class="lightbox"><img src="images\Комоды\Комод4.jpg"/></label>
<input type="checkbox" id="pic-48"/>
<label for="pic-48" class="lightbox"><img src="images\Комоды\Комод5.jpg"/></label>
<input type="checkbox" id="pic-49"/>
<label for="pic-49" class="lightbox"><img src="images\Комоды\Комод6.jpg"/></label>
<input type="checkbox" id="pic-50"/>
<label for="pic-50" class="lightbox"><img src="images\Комоды\Комод7.jpg" /></label>
<input type="checkbox" id="pic-51"/>
<label for="pic-51" class="lightbox"><img src="images\Комоды\Комод8.jpg" /></label>
<input type="checkbox" id="pic-52"/>
<label for="pic-52" class="lightbox"><img src="images\Комоды\Комод9.jpg" /></label>
<input type="checkbox" id="pic-53"/>
<label for="pic-53" class="lightbox"><img src="images\Комоды\Комод10.jpg" /></label>
<input type="checkbox" id="pic-54"/>
<label for="pic-54" class="lightbox"><img src="images\Комоды\Комод11.jpg" /></label>
<input type="checkbox" id="pic-55"/>
<label for="pic-55" class="lightbox"><img src="images\Комоды\Комод12.jpg" /></label>
<input type="checkbox" id="pic-56"/>
<label for="pic-56" class="lightbox"><img src="images\Комоды\Комод13.jpg" /></label>
<div class="grid1">
<label for="pic-44" class="grid-item1"><img src="images\Комоды\Комод1.jpg"/></label>
<label for="pic-45" class="grid-item1"><img src="images\Комоды\Комод2.jpg"/></label>
<label for="pic-46" class="grid-item1"><img src="images\Комоды\Комод3.jpg"/></label>
<label for="pic-47" class="grid-item1"><img src="images\Комоды\Комод4.jpg"/></label>
<label for="pic-48" class="grid-item1"><img src="images\Комоды\Комод5.jpg"/></label>
<label for="pic-49" class="grid-item1"><img src="images\Комоды\Комод6.jpg"/></label>
<label for="pic-50" class="grid-item1"><img src="images\Комоды\Комод7.jpg"/></label>
<label for="pic-51" class="grid-item1"><img src="images\Комоды\Комод8.jpg"/></label>
<label for="pic-52" class="grid-item1"><img src="images\Комоды\Комод9.jpg"/></label>
<label for="pic-53" class="grid-item1"><img src="images\Комоды\Комод10.jpg"/></label>
<label for="pic-54" class="grid-item1"><img src="images\Комоды\Комод11.jpg"/></label>
<label for="pic-55" class="grid-item1"><img src="images\Комоды\Комод12.jpg"/></label>
<label for="pic-56" class="grid-item1"><img src="images\Комоды\Комод13.jpg"/></label>
</div>
</div>
<div class="sec4" id="prog" style="display: none;">
<input type="checkbox" id="pic-57"/>
<label for="pic-57" class="lightbox"><img src="images\ПРОЕКТЫ\проект1.jpg" /></label>
<input type="checkbox" id="pic-58"/>
<label for="pic-58" class="lightbox"><img src="images\ПРОЕКТЫ\проект2.jpg" /></label>
<input type="checkbox" id="pic-59"/>
<label for="pic-59" class="lightbox"><img src="images\ПРОЕКТЫ\проект3.jpg"/></label>
<input type="checkbox" id="pic-60"/>
<label for="pic-60" class="lightbox"><img src="images\ПРОЕКТЫ\проект4.jpg"/></label>
<input type="checkbox" id="pic-61"/>
<label for="pic-61" class="lightbox"><img src="images\ПРОЕКТЫ\проект5.jpg"/></label>
<input type="checkbox" id="pic-62"/>
<label for="pic-62" class="lightbox"><img src="images\ПРОЕКТЫ\проект6.jpg"/></label>
<input type="checkbox" id="pic-63"/>
<label for="pic-63" class="lightbox"><img src="images\ПРОЕКТЫ\проект7.jpg" /></label>
<input type="checkbox" id="pic-64"/>
<label for="pic-64" class="lightbox"><img src="images\ПРОЕКТЫ\проект8.jpg" /></label>
<input type="checkbox" id="pic-65"/>
<label for="pic-65" class="lightbox"><img src="images\ПРОЕКТЫ\проект9.jpg" /></label>
<input type="checkbox" id="pic-66"/>
<label for="pic-66" class="lightbox"><img src="images\ПРОЕКТЫ\проект10.jpg" /></label>
<input type="checkbox" id="pic-67"/>
<label for="pic-67" class="lightbox"><img src="images\ПРОЕКТЫ\проект11.jpg" /></label>
<input type="checkbox" id="pic-68"/>
<label for="pic-68" class="lightbox"><img src="images\ПРОЕКТЫ\проект12.jpg" /></label>
<input type="checkbox" id="pic-69"/>
<label for="pic-69" class="lightbox"><img src="images\ПРОЕКТЫ\проект13.jpg" /></label>
<input type="checkbox" id="pic-70"/>
<label for="pic-70" class="lightbox"><img src="images\ПРОЕКТЫ\проект14.jpg" /></label>
<input type="checkbox" id="pic-71"/>
<label for="pic-71" class="lightbox"><img src="images\ПРОЕКТЫ\проект15.jpg" /></label>
<input type="checkbox" id="pic-72"/>
<label for="pic-72" class="lightbox"><img src="images\ПРОЕКТЫ\проект16.jpg" /></label>
<input type="checkbox" id="pic-73"/>
<label for="pic-73" class="lightbox"><img src="images\ПРОЕКТЫ\проект17.jpg" /></label>
<input type="checkbox" id="pic-74"/>
<label for="pic-74" class="lightbox"><img src="images\ПРОЕКТЫ\проект18.jpg" /></label>
<input type="checkbox" id="pic-75"/>
<label for="pic-75" class="lightbox"><img src="images\ПРОЕКТЫ\проект19.jpg" /></label>
<input type="checkbox" id="pic-76"/>
<label for="pic-76" class="lightbox"><img src="images\ПРОЕКТЫ\проект20.jpg" /></label>
<input type="checkbox" id="pic-77"/>
<label for="pic-77" class="lightbox"><img src="images\ПРОЕКТЫ\проект21.jpg" /></label>
<input type="checkbox" id="pic-78"/>
<label for="pic-78" class="lightbox"><img src="images\ПРОЕКТЫ\проект22.jpg" /></label>
<input type="checkbox" id="pic-79"/>
<label for="pic-79" class="lightbox"><img src="images\ПРОЕКТЫ\проект23.jpg" /></label>
<input type="checkbox" id="pic-80"/>
<label for="pic-80" class="lightbox"><img src="images\ПРОЕКТЫ\проект24.jpg" /></label>
<input type="checkbox" id="pic-81"/>
<label for="pic-81" class="lightbox"><img src="images\ПРОЕКТЫ\проект25.jpg" /></label>
<input type="checkbox" id="pic-82"/>
<label for="pic-82" class="lightbox"><img src="images\ПРОЕКТЫ\проект26.jpg" /></label>
<input type="checkbox" id="pic-83"/>
<label for="pic-83" class="lightbox"><img src="images\ПРОЕКТЫ\проект27.jpg" /></label>
<input type="checkbox" id="pic-84"/>
<label for="pic-84" class="lightbox"><img src="images\ПРОЕКТЫ\проект28.jpg" /></label>
<input type="checkbox" id="pic-85"/>
<label for="pic-85" class="lightbox"><img src="images\ПРОЕКТЫ\проект29.jpg" /></label>
<input type="checkbox" id="pic-86"/>
<label for="pic-86" class="lightbox"><img src="images\ПРОЕКТЫ\проект30.jpg" /></label>
<input type="checkbox" id="pic-87"/>
<label for="pic-87" class="lightbox"><img src="images\ПРОЕКТЫ\проект31.jpg" /></label>
<input type="checkbox" id="pic-88"/>
<label for="pic-88" class="lightbox"><img src="images\ПРОЕКТЫ\проект32.jpg" /></label>
<input type="checkbox" id="pic-89"/>
<label for="pic-89" class="lightbox"><img src="images\ПРОЕКТЫ\проект33.jpg" /></label>
<input type="checkbox" id="pic-90"/>
<label for="pic-90" class="lightbox"><img src="images\ПРОЕКТЫ\проект34.jpg" /></label>
<input type="checkbox" id="pic-91"/>
<label for="pic-91" class="lightbox"><img src="images\ПРОЕКТЫ\проект35.jpg" /></label>
<input type="checkbox" id="pic-92"/>
<label for="pic-92" class="lightbox"><img src="images\ПРОЕКТЫ\проект36.jpg" /></label>
<input type="checkbox" id="pic-93"/>
<label for="pic-93" class="lightbox"><img src="images\ПРОЕКТЫ\проект37.jpg" /></label>

<div class="grid1">
<label for="pic-57" class="grid-item1"><img src="images\ПРОЕКТЫ\проект1.jpg"/></label>
<label for="pic-58" class="grid-item1"><img src="images\ПРОЕКТЫ\проект2.jpg"/></label>
<label for="pic-59" class="grid-item1"><img src="images\ПРОЕКТЫ\проект3.jpg"/></label>
<label for="pic-60" class="grid-item1"><img src="images\ПРОЕКТЫ\проект4.jpg"/></label>
<label for="pic-61" class="grid-item1"><img src="images\ПРОЕКТЫ\проект5.jpg"/></label>
<label for="pic-62" class="grid-item1"><img src="images\ПРОЕКТЫ\проект6.jpg"/></label>
<label for="pic-63" class="grid-item1"><img src="images\ПРОЕКТЫ\проект7.jpg"/></label>
<label for="pic-64" class="grid-item1"><img src="images\ПРОЕКТЫ\проект8.jpg"/></label>
<label for="pic-65" class="grid-item1"><img src="images\ПРОЕКТЫ\проект9.jpg"/></label>
<label for="pic-66" class="grid-item1"><img src="images\ПРОЕКТЫ\проект10.jpg"/></label>
<label for="pic-67" class="grid-item1"><img src="images\ПРОЕКТЫ\проект11.jpg"/></label>
<label for="pic-68" class="grid-item1"><img src="images\ПРОЕКТЫ\проект12.jpg"/></label>
<label for="pic-69" class="grid-item1"><img src="images\ПРОЕКТЫ\проект13.jpg"/></label>
<label for="pic-70" class="grid-item1"><img src="images\ПРОЕКТЫ\проект14.jpg"/></label>
<label for="pic-71" class="grid-item1"><img src="images\ПРОЕКТЫ\проект15.jpg"/></label>
<label for="pic-72" class="grid-item1"><img src="images\ПРОЕКТЫ\проект16.jpg"/></label>
<label for="pic-73" class="grid-item1"><img src="images\ПРОЕКТЫ\проект17.jpg"/></label>
<label for="pic-74" class="grid-item1"><img src="images\ПРОЕКТЫ\проект18.jpg"/></label>
<label for="pic-75" class="grid-item1"><img src="images\ПРОЕКТЫ\проект19.jpg"/></label>
<label for="pic-76" class="grid-item1"><img src="images\ПРОЕКТЫ\проект20.jpg"/></label>
<label for="pic-77" class="grid-item1"><img src="images\ПРОЕКТЫ\проект21.jpg"/></label>
<label for="pic-78" class="grid-item1"><img src="images\ПРОЕКТЫ\проект22.jpg"/></label>
<label for="pic-79" class="grid-item1"><img src="images\ПРОЕКТЫ\проект23.jpg"/></label>
<label for="pic-80" class="grid-item1"><img src="images\ПРОЕКТЫ\проект24.jpg"/></label>
<label for="pic-81" class="grid-item1"><img src="images\ПРОЕКТЫ\проект25.jpg"/></label>
<label for="pic-82" class="grid-item1"><img src="images\ПРОЕКТЫ\проект26.jpg"/></label>
<label for="pic-83" class="grid-item1"><img src="images\ПРОЕКТЫ\проект27.jpg"/></label>
<label for="pic-84" class="grid-item1"><img src="images\ПРОЕКТЫ\проект28.jpg"/></label>
<label for="pic-85" class="grid-item1"><img src="images\ПРОЕКТЫ\проект29.jpg"/></label>
<label for="pic-86" class="grid-item1"><img src="images\ПРОЕКТЫ\проект30.jpg"/></label>
<label for="pic-87" class="grid-item1"><img src="images\ПРОЕКТЫ\проект31.jpg"/></label>
<label for="pic-88" class="grid-item1"><img src="images\ПРОЕКТЫ\проект32.jpg"/></label>
<label for="pic-89" class="grid-item1"><img src="images\ПРОЕКТЫ\проект33.jpg"/></label>
<label for="pic-90" class="grid-item1"><img src="images\ПРОЕКТЫ\проект34.jpg"/></label>
<label for="pic-91" class="grid-item1"><img src="images\ПРОЕКТЫ\проект35.jpg"/></label>
<label for="pic-92" class="grid-item1"><img src="images\ПРОЕКТЫ\проект36.jpg"/></label>
<label for="pic-93" class="grid-item1"><img src="images\ПРОЕКТЫ\проект37.jpg"/></label>
</div>
</div>
<div class="sec5" id="chicken" style="display: none;">
<input type="checkbox" id="pic-94"/>
<label for="pic-94" class="lightbox"><img src="images\Кухни\Кухня1.jpg" /></label>
<input type="checkbox" id="pic-95"/>
<label for="pic-95" class="lightbox"><img src="images\Кухни\Кухня2.jpg" /></label>
<input type="checkbox" id="pic-96"/>
<label for="pic-96" class="lightbox"><img src="images\Кухни\Кухня3.jpg"/></label>
<input type="checkbox" id="pic-97"/>
<label for="pic-97" class="lightbox"><img src="images\Кухни\Кухня4.jpg"/></label>
<input type="checkbox" id="pic-98"/>
<label for="pic-98" class="lightbox"><img src="images\Кухни\Кухня5.jpg"/></label>
<input type="checkbox" id="pic-99"/>
<label for="pic-99" class="lightbox"><img src="images\Кухни\Кухня6.jpg"/></label>
<input type="checkbox" id="pic-100"/>
<label for="pic-100" class="lightbox"><img src="images\Кухни\Кухня7.jpg" /></label>
<input type="checkbox" id="pic-101"/>
<label for="pic-101" class="lightbox"><img src="images\Кухни\Кухня8.jpg" /></label>
<input type="checkbox" id="pic-102"/>
<label for="pic-102" class="lightbox"><img src="images\Кухни\Кухня9.jpg" /></label>
<input type="checkbox" id="pic-103"/>
<label for="pic-103" class="lightbox"><img src="images\Кухни\Кухня10.jpg" /></label>
<input type="checkbox" id="pic-104"/>
<label for="pic-104" class="lightbox"><img src="images\Кухни\Кухня11.jpg" /></label>
<input type="checkbox" id="pic-105"/>
<label for="pic-105" class="lightbox"><img src="images\Кухни\Кухня12.jpg" /></label>
<input type="checkbox" id="pic-106"/>
<label for="pic-106" class="lightbox"><img src="images\Кухни\Кухня13.jpg" /></label>
<input type="checkbox" id="pic-107"/>
<label for="pic-107" class="lightbox"><img src="images\Кухни\Кухня14.jpg" /></label>
<input type="checkbox" id="pic-108"/>
<label for="pic-108" class="lightbox"><img src="images\Кухни\Кухня15.jpg" /></label>
<input type="checkbox" id="pic-109"/>
<label for="pic-109" class="lightbox"><img src="images\Кухни\Кухня16.jpg" /></label>
<input type="checkbox" id="pic-110"/>
<label for="pic-110" class="lightbox"><img src="images\Кухни\Кухня17.jpg" /></label>
<input type="checkbox" id="pic-111"/>
<label for="pic-111" class="lightbox"><img src="images\Кухни\Кухня18.jpg" /></label>
<input type="checkbox" id="pic-112"/>
<label for="pic-112" class="lightbox"><img src="images\Кухни\Кухня19.jpg" /></label>
<input type="checkbox" id="pic-113"/>
<label for="pic-113" class="lightbox"><img src="images\Кухни\Кухня20.jpg" /></label>
<input type="checkbox" id="pic-114"/>
<label for="pic-114" class="lightbox"><img src="images\Кухни\Кухня21.jpg" /></label>
<input type="checkbox" id="pic-115"/>
<label for="pic-115" class="lightbox"><img src="images\Кухни\Кухня22.jpg" /></label>
<input type="checkbox" id="pic-116"/>
<label for="pic-116" class="lightbox"><img src="images\Кухни\Кухня23.jpg" /></label>
<input type="checkbox" id="pic-117"/>
<label for="pic-117" class="lightbox"><img src="images\Кухни\Кухня24.jpg" /></label>
<input type="checkbox" id="pic-118"/>
<label for="pic-118" class="lightbox"><img src="images\Кухни\Кухня25.jpg" /></label>
<input type="checkbox" id="pic-119"/>
<label for="pic-119" class="lightbox"><img src="images\Кухни\Кухня26.jpg" /></label>
<input type="checkbox" id="pic-120"/>
<label for="pic-120" class="lightbox"><img src="images\Кухни\Кухня27.jpg" /></label>
<input type="checkbox" id="pic-121"/>
<label for="pic-121" class="lightbox"><img src="images\Кухни\Кухня28.jpg" /></label>
<input type="checkbox" id="pic-122"/>
<label for="pic-122" class="lightbox"><img src="images\Кухни\Кухня29.jpg" /></label>
<input type="checkbox" id="pic-123"/>
<label for="pic-123" class="lightbox"><img src="images\Кухни\Кухня30.jpg" /></label>
<input type="checkbox" id="pic-124"/>
<label for="pic-124" class="lightbox"><img src="images\Кухни\Кухня31.jpg" /></label>
<input type="checkbox" id="pic-125"/>
<label for="pic-125" class="lightbox"><img src="images\Кухни\Кухня32.jpg" /></label>
<input type="checkbox" id="pic-126"/>
<label for="pic-126" class="lightbox"><img src="images\Кухни\Кухня33.jpg" /></label>
<input type="checkbox" id="pic-127"/>
<label for="pic-127" class="lightbox"><img src="images\Кухни\Кухня34.jpg" /></label>
<input type="checkbox" id="pic-128"/>
<label for="pic-128" class="lightbox"><img src="images\Кухни\Кухня35.jpg" /></label>
<input type="checkbox" id="pic-129"/>
<label for="pic-129" class="lightbox"><img src="images\Кухни\Кухня36.jpg" /></label>
<input type="checkbox" id="pic-130"/>
<label for="pic-130" class="lightbox"><img src="images\Кухни\Кухня37.jpg" /></label>
<input type="checkbox" id="pic-131"/>
<label for="pic-131" class="lightbox"><img src="images\Кухни\Кухня38.jpg" /></label>
<input type="checkbox" id="pic-132"/>
<label for="pic-132" class="lightbox"><img src="images\Кухни\Кухня39.jpg" /></label>
<input type="checkbox" id="pic-133"/>
<label for="pic-133" class="lightbox"><img src="images\Кухни\Кухня40.jpg" /></label>
<input type="checkbox" id="pic-134"/>
<label for="pic-134" class="lightbox"><img src="images\Кухни\Кухня41.jpg" /></label>
<input type="checkbox" id="pic-135"/>
<label for="pic-135" class="lightbox"><img src="images\Кухни\Кухня42.jpg" /></label>
<input type="checkbox" id="pic-136"/>
<label for="pic-136" class="lightbox"><img src="images\Кухни\Кухня43.jpg" /></label>
<input type="checkbox" id="pic-137"/>
<label for="pic-137" class="lightbox"><img src="images\Кухни\Кухня44.jpg" /></label>
<input type="checkbox" id="pic-138"/>
<label for="pic-138" class="lightbox"><img src="images\Кухни\Кухня45.jpg" /></label>
<input type="checkbox" id="pic-139"/>
<label for="pic-139" class="lightbox"><img src="images\Кухни\Кухня46.jpg" /></label>
<input type="checkbox" id="pic-140"/>
<label for="pic-140" class="lightbox"><img src="images\Кухни\Кухня47.jpg" /></label>
<input type="checkbox" id="pic-141"/>
<label for="pic-141" class="lightbox"><img src="images\Кухни\Кухня48.jpg" /></label>
<input type="checkbox" id="pic-142"/>
<label for="pic-142" class="lightbox"><img src="images\Кухни\Кухня49.jpg" /></label>
<input type="checkbox" id="pic-143"/>
<label for="pic-143" class="lightbox"><img src="images\Кухни\Кухня50.jpg" /></label>
<input type="checkbox" id="pic-144"/>
<label for="pic-144" class="lightbox"><img src="images\Кухни\Кухня51.jpg" /></label>
<input type="checkbox" id="pic-145"/>
<label for="pic-145" class="lightbox"><img src="images\Кухни\Кухня52.jpg" /></label>
<input type="checkbox" id="pic-146"/>
<label for="pic-146" class="lightbox"><img src="images\Кухни\Кухня53.jpg" /></label>
<input type="checkbox" id="pic-147"/>
<label for="pic-147" class="lightbox"><img src="images\Кухни\Кухня54.jpg" /></label>
<input type="checkbox" id="pic-148"/>
<label for="pic-148" class="lightbox"><img src="images\Кухни\Кухня55.jpg" /></label>
<input type="checkbox" id="pic-149"/>
<label for="pic-149" class="lightbox"><img src="images\Кухни\Кухня56.jpg" /></label>
<input type="checkbox" id="pic-150"/>
<label for="pic-150" class="lightbox"><img src="images\Кухни\Кухня57.jpg" /></label>
<input type="checkbox" id="pic-151"/>
<label for="pic-151" class="lightbox"><img src="images\Кухни\Кухня58.jpg" /></label>
<input type="checkbox" id="pic-152"/>
<label for="pic-152" class="lightbox"><img src="images\Кухни\Кухня59.jpg" /></label>
<input type="checkbox" id="pic-153"/>
<label for="pic-153" class="lightbox"><img src="images\Кухни\Кухня60.jpg" /></label>
<input type="checkbox" id="pic-154"/>
<label for="pic-154" class="lightbox"><img src="images\Кухни\Кухня61.jpg" /></label>
<input type="checkbox" id="pic-155"/>
<label for="pic-155" class="lightbox"><img src="images\Кухни\Кухня62.jpg" /></label>
<input type="checkbox" id="pic-156"/>
<label for="pic-156" class="lightbox"><img src="images\Кухни\Кухня63.jpg" /></label>


<div class="grid1">
<label for="pic-94" class="grid-item1"><img src="images\Кухни\Кухня1.jpg"/></label>
<label for="pic-95" class="grid-item1"><img src="images\Кухни\Кухня2.jpg"/></label>
<label for="pic-96" class="grid-item1"><img src="images\Кухни\Кухня3.jpg"/></label>
<label for="pic-97" class="grid-item1"><img src="images\Кухни\Кухня4.jpg"/></label>
<label for="pic-98" class="grid-item1"><img src="images\Кухни\Кухня5.jpg"/></label>
<label for="pic-99" class="grid-item1"><img src="images\Кухни\Кухня6.jpg"/></label>
<label for="pic-100" class="grid-item1"><img src="images\Кухни\Кухня7.jpg"/></label>
<label for="pic-101" class="grid-item1"><img src="images\Кухни\Кухня8.jpg"/></label>
<label for="pic-102" class="grid-item1"><img src="images\Кухни\Кухня9.jpg"/></label>
<label for="pic-103" class="grid-item1"><img src="images\Кухни\Кухня10.jpg"/></label>
<label for="pic-104" class="grid-item1"><img src="images\Кухни\Кухня11.jpg"/></label>
<label for="pic-105" class="grid-item1"><img src="images\Кухни\Кухня12.jpg"/></label>
<label for="pic-106" class="grid-item1"><img src="images\Кухни\Кухня13.jpg"/></label>
<label for="pic-107" class="grid-item1"><img src="images\Кухни\Кухня14.jpg"/></label>
<label for="pic-108" class="grid-item1"><img src="images\Кухни\Кухня15.jpg"/></label>
<label for="pic-109" class="grid-item1"><img src="images\Кухни\Кухня16.jpg"/></label>
<label for="pic-110" class="grid-item1"><img src="images\Кухни\Кухня17.jpg"/></label>
<label for="pic-111" class="grid-item1"><img src="images\Кухни\Кухня18.jpg"/></label>
<label for="pic-112" class="grid-item1"><img src="images\Кухни\Кухня19.jpg"/></label>
<label for="pic-113" class="grid-item1"><img src="images\Кухни\Кухня20.jpg"/></label>
<label for="pic-114" class="grid-item1"><img src="images\Кухни\Кухня21.jpg"/></label>
<label for="pic-115" class="grid-item1"><img src="images\Кухни\Кухня22.jpg"/></label>
<label for="pic-116" class="grid-item1"><img src="images\Кухни\Кухня23.jpg"/></label>
<label for="pic-117" class="grid-item1"><img src="images\Кухни\Кухня24.jpg"/></label>
<label for="pic-118" class="grid-item1"><img src="images\Кухни\Кухня25.jpg"/></label>
<label for="pic-119" class="grid-item1"><img src="images\Кухни\Кухня26.jpg"/></label>
<label for="pic-120" class="grid-item1"><img src="images\Кухни\Кухня27.jpg"/></label>
<label for="pic-121" class="grid-item1"><img src="images\Кухни\Кухня28.jpg"/></label>
<label for="pic-122" class="grid-item1"><img src="images\Кухни\Кухня29.jpg"/></label>
<label for="pic-123" class="grid-item1"><img src="images\Кухни\Кухня30.jpg"/></label>
<label for="pic-124" class="grid-item1"><img src="images\Кухни\Кухня31.jpg"/></label>
<label for="pic-125" class="grid-item1"><img src="images\Кухни\Кухня32.jpg"/></label>
<label for="pic-126" class="grid-item1"><img src="images\Кухни\Кухня33.jpg"/></label>
<label for="pic-127" class="grid-item1"><img src="images\Кухни\Кухня34.jpg"/></label>
<label for="pic-128" class="grid-item1"><img src="images\Кухни\Кухня35.jpg"/></label>
<label for="pic-129" class="grid-item1"><img src="images\Кухни\Кухня36.jpg"/></label>
<label for="pic-130" class="grid-item1"><img src="images\Кухни\Кухня37.jpg"/></label>
<label for="pic-131" class="grid-item1"><img src="images\Кухни\Кухня38.jpg"/></label>
<label for="pic-132" class="grid-item1"><img src="images\Кухни\Кухня39.jpg"/></label>
<label for="pic-133" class="grid-item1"><img src="images\Кухни\Кухня40.jpg"/></label>
<label for="pic-134" class="grid-item1"><img src="images\Кухни\Кухня41.jpg"/></label>
<label for="pic-135" class="grid-item1"><img src="images\Кухни\Кухня42.jpg"/></label>
<label for="pic-136" class="grid-item1"><img src="images\Кухни\Кухня43.jpg"/></label>
<label for="pic-137" class="grid-item1"><img src="images\Кухни\Кухня44.jpg"/></label>
<label for="pic-138" class="grid-item1"><img src="images\Кухни\Кухня45.jpg"/></label>
<label for="pic-139" class="grid-item1"><img src="images\Кухни\Кухня46.jpg"/></label>
<label for="pic-140" class="grid-item1"><img src="images\Кухни\Кухня47.jpg"/></label>
<label for="pic-141" class="grid-item1"><img src="images\Кухни\Кухня48.jpg"/></label>
<label for="pic-142" class="grid-item1"><img src="images\Кухни\Кухня49.jpg"/></label>
<label for="pic-143" class="grid-item1"><img src="images\Кухни\Кухня50.jpg"/></label>
<label for="pic-144" class="grid-item1"><img src="images\Кухни\Кухня51.jpg"/></label>
<label for="pic-145" class="grid-item1"><img src="images\Кухни\Кухня52.jpg"/></label>
<label for="pic-146" class="grid-item1"><img src="images\Кухни\Кухня53.jpg"/></label>
<label for="pic-147" class="grid-item1"><img src="images\Кухни\Кухня54.jpg"/></label>
<label for="pic-148" class="grid-item1"><img src="images\Кухни\Кухня55.jpg"/></label>
<label for="pic-149" class="grid-item1"><img src="images\Кухни\Кухня56.jpg"/></label>
<label for="pic-150" class="grid-item1"><img src="images\Кухни\Кухня57.jpg"/></label>
<label for="pic-151" class="grid-item1"><img src="images\Кухни\Кухня58.jpg"/></label>
<label for="pic-152" class="grid-item1"><img src="images\Кухни\Кухня59.jpg"/></label>
<label for="pic-153" class="grid-item1"><img src="images\Кухни\Кухня60.jpg"/></label>
<label for="pic-154" class="grid-item1"><img src="images\Кухни\Кухня61.jpg"/></label>
<label for="pic-155" class="grid-item1"><img src="images\Кухни\Кухня62.jpg"/></label>
<label for="pic-156" class="grid-item1"><img src="images\Кухни\Кухня63.jpg"/></label>
</div>
</div>
<div class="sec6" id="restavration" style="display: none;">
<input type="checkbox" id="pic-157"/>
<label for="pic-157" class="lightbox"><img src="images\Реставрация\Реставрация1.jpg" /></label>
<input type="checkbox" id="pic-158"/>
<label for="pic-158" class="lightbox"><img src="images\Реставрация\Реставрация2.jpg" /></label>
<input type="checkbox" id="pic-159"/>
<label for="pic-159" class="lightbox"><img src="images\Реставрация\Реставрация3.jpg"/></label>
<input type="checkbox" id="pic-160"/>
<label for="pic-160" class="lightbox"><img src="images\Реставрация\Реставрация4.jpg"/></label>
<input type="checkbox" id="pic-161"/>
<label for="pic-161" class="lightbox"><img src="images\Реставрация\Реставрация5.jpg"/></label>
<input type="checkbox" id="pic-162"/>
<label for="pic-162" class="lightbox"><img src="images\Реставрация\Реставрация6.jpg"/></label>
<input type="checkbox" id="pic-163"/>
<label for="pic-163" class="lightbox"><img src="images\Реставрация\Реставрация7.jpg" /></label>
<div class="grid1">
<label for="pic-157" class="grid-item1"><img src="images\Реставрация\Реставрация1.jpg"/></label>
<label for="pic-158" class="grid-item1"><img src="images\Реставрация\Реставрация2.jpg"/></label>
<label for="pic-159" class="grid-item1"><img src="images\Реставрация\Реставрация3.jpg"/></label>
<label for="pic-160" class="grid-item1"><img src="images\Реставрация\Реставрация4.jpg"/></label>
<label for="pic-161" class="grid-item1"><img src="images\Реставрация\Реставрация5.jpg"/></label>
<label for="pic-162" class="grid-item1"><img src="images\Реставрация\Реставрация6.jpg"/></label>
<label for="pic-163" class="grid-item1"><img src="images\Реставрация\Реставрация7.jpg"/></label>
</div>
</div>
<div class="sec7"id="table" style="display: none;">
<input type="checkbox" id="pic-164"/>
<label for="pic-164" class="lightbox"><img src="images\СТОЛЫ\Стол1.jpg"/></label>
<input type="checkbox" id="pic-165"/>
<label for="pic-165" class="lightbox"><img src="images\СТОЛЫ\Стол2.jpg" /></label>
<input type="checkbox" id="pic-166"/>
<label for="pic-166" class="lightbox"><img src="images\СТОЛЫ\Стол3.jpg"/></label>
<input type="checkbox" id="pic-167"/>
<label for="pic-167" class="lightbox"><img src="images\СТОЛЫ\Стол4.jpg"/></label>
<input type="checkbox" id="pic-168"/>
<label for="pic-168" class="lightbox"><img src="images\СТОЛЫ\Стол5.jpg"/></label>
<input type="checkbox" id="pic-169"/>
<label for="pic-169" class="lightbox"><img src="images\СТОЛЫ\Стол6.jpg"/></label>
<input type="checkbox" id="pic-170"/>
<label for="pic-170" class="lightbox"><img src="images\СТОЛЫ\Стол7.jpg" /></label>
<input type="checkbox" id="pic-171"/>
<label for="pic-171" class="lightbox"><img src="images\СТОЛЫ\Стол8.jpg" /></label>
<input type="checkbox" id="pic-172"/>
<label for="pic-172" class="lightbox"><img src="images\СТОЛЫ\Стол9.jpg" /></label>
<input type="checkbox" id="pic-173"/>
<label for="pic-173" class="lightbox"><img src="images\СТОЛЫ\Стол10.jpg" /></label>
<input type="checkbox" id="pic-174"/>
<label for="pic-174" class="lightbox"><img src="images\СТОЛЫ\Стол11.jpg" /></label>
<input type="checkbox" id="pic-175"/>
<label for="pic-175" class="lightbox"><img src="images\СТОЛЫ\Стол12.jpg" /></label>
<input type="checkbox" id="pic-176"/>
<label for="pic-176" class="lightbox"><img src="images\СТОЛЫ\Стол13.jpg" /></label>
<div class="grid1">
<label for="pic-164" class="grid-item1"><img src="images\СТОЛЫ\Стол1.jpg"/></label>
<label for="pic-165" class="grid-item1"><img src="images\СТОЛЫ\Стол2.jpg"/></label>
<label for="pic-166" class="grid-item1"><img src="images\СТОЛЫ\Стол3.jpg"/></label>
<label for="pic-167" class="grid-item1"><img src="images\СТОЛЫ\Стол4.jpg"/></label>
<label for="pic-168" class="grid-item1"><img src="images\СТОЛЫ\Стол5.jpg"/></label>
<label for="pic-169" class="grid-item1"><img src="images\СТОЛЫ\Стол6.jpg"/></label>
<label for="pic-170" class="grid-item1"><img src="images\СТОЛЫ\Стол7.jpg"/></label>
<label for="pic-171" class="grid-item1"><img src="images\СТОЛЫ\Стол8.jpg"/></label>
<label for="pic-172" class="grid-item1"><img src="images\СТОЛЫ\Стол9.jpg"/></label>
<label for="pic-173" class="grid-item1"><img src="images\СТОЛЫ\Стол10.jpg"/></label>
<label for="pic-174" class="grid-item1"><img src="images\СТОЛЫ\Стол11.jpg"/></label>
<label for="pic-175" class="grid-item1"><img src="images\СТОЛЫ\Стол12.jpg"/></label>
<label for="pic-176" class="grid-item1"><img src="images\СТОЛЫ\Стол13.jpg"/></label>
</div>
</div>
<div class="sec8" id="shkaf" style="display: none;">
<input type="checkbox" id="pic-177"/>
<label for="pic-177" class="lightbox"><img src="images\шкафы-купе\шкаф1.jpg" /></label>
<input type="checkbox" id="pic-178"/>
<label for="pic-178" class="lightbox"><img src="images\шкафы-купе\шкаф2.jpg" /></label>
<input type="checkbox" id="pic-179"/>
<label for="pic-179" class="lightbox"><img src="images\шкафы-купе\шкаф3.jpg"/></label>
<input type="checkbox" id="pic-180"/>
<label for="pic-180" class="lightbox"><img src="images\шкафы-купе\шкаф4.jpg"/></label>
<input type="checkbox" id="pic-181"/>
<label for="pic-181" class="lightbox"><img src="images\шкафы-купе\шкаф5.jpg"/></label>
<input type="checkbox" id="pic-182"/>
<label for="pic-182" class="lightbox"><img src="images\шкафы-купе\шкаф6.jpg"/></label>
<input type="checkbox" id="pic-183"/>
<label for="pic-183" class="lightbox"><img src="images\шкафы-купе\шкаф7.jpg" /></label>
<input type="checkbox" id="pic-184"/>
<label for="pic-184" class="lightbox"><img src="images\шкафы-купе\шкаф8.jpg" /></label>
<input type="checkbox" id="pic-185"/>
<label for="pic-185" class="lightbox"><img src="images\шкафы-купе\шкаф9.jpg" /></label>
<input type="checkbox" id="pic-186"/>
<label for="pic-186" class="lightbox"><img src="images\шкафы-купе\шкаф10.jpg" /></label>
<input type="checkbox" id="pic-187"/>
<label for="pic-187" class="lightbox"><img src="images\шкафы-купе\шкаф11.jpg" /></label>
<input type="checkbox" id="pic-188"/>
<label for="pic-188" class="lightbox"><img src="images\шкафы-купе\шкаф12.jpg" /></label>
<input type="checkbox" id="pic-189"/>
<label for="pic-189" class="lightbox"><img src="images\шкафы-купе\шкаф13.jpg" /></label>
<input type="checkbox" id="pic-190"/>
<label for="pic-190" class="lightbox"><img src="images\шкафы-купе\шкаф14.jpg" /></label>
<input type="checkbox" id="pic-191"/>
<label for="pic-191" class="lightbox"><img src="images\шкафы-купе\шкаф15.jpg" /></label>
<input type="checkbox" id="pic-192"/>
<label for="pic-192" class="lightbox"><img src="images\шкафы-купе\шкаф16.jpg" /></label>
<input type="checkbox" id="pic-193"/>
<label for="pic-193" class="lightbox"><img src="images\шкафы-купе\шкаф17.jpg" /></label>
<input type="checkbox" id="pic-194"/>
<label for="pic-194" class="lightbox"><img src="images\шкафы-купе\шкаф18.jpg" /></label>
<input type="checkbox" id="pic-195"/>
<label for="pic-195" class="lightbox"><img src="images\шкафы-купе\шкаф19.jpg" /></label>
<input type="checkbox" id="pic-196"/>
<label for="pic-196" class="lightbox"><img src="images\шкафы-купе\шкаф20.jpg" /></label>
<input type="checkbox" id="pic-197"/>
<label for="pic-197" class="lightbox"><img src="images\шкафы-купе\шкаф21.jpg" /></label>
<input type="checkbox" id="pic-198"/>
<label for="pic-198" class="lightbox"><img src="images\шкафы-купе\шкаф22.jpg" /></label>
<input type="checkbox" id="pic-199"/>
<label for="pic-199" class="lightbox"><img src="images\шкафы-купе\шкаф23.jpg" /></label>
<input type="checkbox" id="pic-200"/>
<label for="pic-200" class="lightbox"><img src="images\шкафы-купе\шкаф24.jpg" /></label>
<input type="checkbox" id="pic-201"/>
<label for="pic-201" class="lightbox"><img src="images\шкафы-купе\шкаф25.jpg" /></label>
<input type="checkbox" id="pic-202"/>
<label for="pic-202" class="lightbox"><img src="images\шкафы-купе\шкаф26.jpg" /></label>
<input type="checkbox" id="pic-203"/>
<label for="pic-203" class="lightbox"><img src="images\шкафы-купе\шкаф27.jpg" /></label>
<input type="checkbox" id="pic-204"/>
<label for="pic-204" class="lightbox"><img src="images\шкафы-купе\шкаф28.jpg" /></label>
<input type="checkbox" id="pic-205"/>
<label for="pic-205" class="lightbox"><img src="images\шкафы-купе\шкаф29.jpg" /></label>
<input type="checkbox" id="pic-206"/>
<label for="pic-206" class="lightbox"><img src="images\шкафы-купе\шкаф30.jpg" /></label>
<input type="checkbox" id="pic-207"/>
<label for="pic-207" class="lightbox"><img src="images\шкафы-купе\шкаф31.jpg" /></label>
<input type="checkbox" id="pic-208"/>
<label for="pic-208" class="lightbox"><img src="images\шкафы-купе\шкаф32.jpg" /></label>
<input type="checkbox" id="pic-209"/>
<label for="pic-209" class="lightbox"><img src="images\шкафы-купе\шкаф33.jpg" /></label>
<input type="checkbox" id="pic-210"/>
<label for="pic-210" class="lightbox"><img src="images\шкафы-купе\шкаф34.jpg" /></label>
<input type="checkbox" id="pic-211"/>
<label for="pic-211" class="lightbox"><img src="images\шкафы-купе\шкаф35.jpg" /></label>
<div class="grid1">
<label for="pic-177" class="grid-item1"><img src="images\шкафы-купе\шкаф1.jpg"/></label>
<label for="pic-178" class="grid-item1"><img src="images\шкафы-купе\шкаф2.jpg"/></label>
<label for="pic-179" class="grid-item1"><img src="images\шкафы-купе\шкаф3.jpg"/></label>
<label for="pic-180" class="grid-item1"><img src="images\шкафы-купе\шкаф4.jpg"/></label>
<label for="pic-181" class="grid-item1"><img src="images\шкафы-купе\шкаф5.jpg"/></label>
<label for="pic-182" class="grid-item1"><img src="images\шкафы-купе\шкаф6.jpg"/></label>
<label for="pic-183" class="grid-item1"><img src="images\шкафы-купе\шкаф7.jpg"/></label>
<label for="pic-184" class="grid-item1"><img src="images\шкафы-купе\шкаф8.jpg"/></label>
<label for="pic-185" class="grid-item1"><img src="images\шкафы-купе\шкаф9.jpg"/></label>
<label for="pic-186" class="grid-item1"><img src="images\шкафы-купе\шкаф10.jpg"/></label>
<label for="pic-187" class="grid-item1"><img src="images\шкафы-купе\шкаф11.jpg"/></label>
<label for="pic-188" class="grid-item1"><img src="images\шкафы-купе\шкаф12.jpg"/></label>
<label for="pic-189" class="grid-item1"><img src="images\шкафы-купе\шкаф13.jpg"/></label>
<label for="pic-190" class="grid-item1"><img src="images\шкафы-купе\шкаф14.jpg"/></label>
<label for="pic-191" class="grid-item1"><img src="images\шкафы-купе\шкаф15.jpg"/></label>
<label for="pic-192" class="grid-item1"><img src="images\шкафы-купе\шкаф16.jpg"/></label>
<label for="pic-193" class="grid-item1"><img src="images\шкафы-купе\шкаф17.jpg"/></label>
<label for="pic-194" class="grid-item1"><img src="images\шкафы-купе\шкаф18.jpg"/></label>
<label for="pic-195" class="grid-item1"><img src="images\шкафы-купе\шкаф19.jpg"/></label>
<label for="pic-196" class="grid-item1"><img src="images\шкафы-купе\шкаф20.jpg"/></label>
<label for="pic-197" class="grid-item1"><img src="images\шкафы-купе\шкаф21.jpg"/></label>
<label for="pic-198" class="grid-item1"><img src="images\шкафы-купе\шкаф22.jpg"/></label>
<label for="pic-199" class="grid-item1"><img src="images\шкафы-купе\шкаф23.jpg"/></label>
<label for="pic-200" class="grid-item1"><img src="images\шкафы-купе\шкаф24.jpg"/></label>
<label for="pic-201" class="grid-item1"><img src="images\шкафы-купе\шкаф25.jpg"/></label>
<label for="pic-202" class="grid-item1"><img src="images\шкафы-купе\шкаф26.jpg"/></label>
<label for="pic-203" class="grid-item1"><img src="images\шкафы-купе\шкаф27.jpg"/></label>
<label for="pic-204" class="grid-item1"><img src="images\шкафы-купе\шкаф28.jpg"/></label>
<label for="pic-205" class="grid-item1"><img src="images\шкафы-купе\шкаф29.jpg"/></label>
<label for="pic-206" class="grid-item1"><img src="images\шкафы-купе\шкаф30.jpg"/></label>
<label for="pic-207" class="grid-item1"><img src="images\шкафы-купе\шкаф31.jpg"/></label>
<label for="pic-208" class="grid-item1"><img src="images\шкафы-купе\шкаф32.jpg"/></label>
<label for="pic-209" class="grid-item1"><img src="images\шкафы-купе\шкаф33.jpg"/></label>
<label for="pic-210" class="grid-item1"><img src="images\шкафы-купе\шкаф34.jpg"/></label>
<label for="pic-211" class="grid-item1"><img src="images\шкафы-купе\шкаф35.jpg"/></label>

</div>
</div>
</div>
</div>
<script>
var show;
function openbox(type){
param=document.getElementById(type);
if(param.style.display == "none") {
if(show) show.style.display = "none";
param.style.display = "block";
show = param;
}else param.style.display = "none"
}
</script
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>