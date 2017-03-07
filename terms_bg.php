<?php include("weather.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php require("includes/title.html"); ?> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.pngFix.js"></script>
    </head>
    <body id="inner">
		<div id="shell">
			<div id="header">
            	<h1 id="logo"><a href="home_bg.php" class="no-text" title="Touring.bg">TOURING</a></h1>
                <div id="head-right">
                	<?php require("includes/langs_bg.html"); ?>
                    <div class="cl no-text"><!-- --></div>
                    <?php require("includes/menu-top/bg_destinations.html"); ?>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <div id="content">
            	<div id="left">
                	<?php require("includes/readmore_wiki_bg.html"); ?>
                	<div id="buylink" class="box"><h1 style="background: url('css/images/left-weather-head.png') repeat scroll 0 0 transparent;">E-Tickets:</h1><a style="width: 200px; margin: 5px auto; display: block;" href="https://eshop.amsbus.cz/tourbg/koupitjizdenku/"><img style="width: 100%;" alt="http://img.artlebedev.ru/everything/gosloto/video/process/gosloto-video-process-click.gif" src="http://img.artlebedev.ru/everything/gosloto/video/process/gosloto-video-process-click.gif"></a></div><div id="weather" class="box">
                    	<h1>Съобщение:</h1>
       <p style="padding:10px 20px 0;"><strong>Уважаеми клиенти,</strong></p>
       <p style="padding:10px 20px 0;"><strong> Резервация и закупуване на билет може да направите чрез Е Pay и Easy Pay </strong></p>
       <p style="padding:10px 20px 0;"><strong> За повече информация, моля свържете се на телефоните в раздел &quot;Контакти&quot;. </strong></p>
                    </div>
                  
                    <div id="left-contacts">
                    	<p>Адрес: <b>1202 София</b></p>
                        <p><b>бул.&quot;Мария Луиза&quot; 102</b></p>
                        <p><b>Автогара &quot;Сердика&quot;, офис 69</b></p>
                        <p>Телефон: <b>+359 2 980 68 62</b></p>
                        <p>Моб. тел.: <b>+359 89 449 94 97</b></p>
                        <p>Телефон/Факс: <b>+359 2 981 50 37</b></p>
                        <p>Е-майл: <a href="mailto:touringbus@touring.bg">touringbus@touring.bg</a></p>
                        <p>Е-майл: <a href="mailto:tourbusbg@abv.bg">tourbusbg@abv.bg</a></p>
                    </div>
                </div>
                <div id="right">
                	<div id="crumb">
                    	<h1>Условия за пътуване</h1>
                    </div>
                    <div id="page-text">
						<p>	1. Срещу настоящия билет фирма Турбус БГ  осигурява по посочения маршрут  превоза с автобус на пътника и личния му багаж в размер на един куфар и една малка ,пътна чанта. Всеки допълнителен багаж се заплаща.
<br />
2. Приносителят на настоящия билет е застрахован по време на пътуването за риска „Злополука“. При желание за друг вид застраховка, пътникът следва да сключи отделен застрахователен договор.
<br />3. При отказ от пътуване билетът може да бъде върнат най-късно 72 часа преди часа , определен за отпътуване. В този случай се удържат 10% от стойността. При отказ от пътуване между 72 и 24 часа се задържа като неустойка 50% от стойността на билета. При отказ от пътуване под 24 часа –стойността на билета не се възстановява.
<br />4. Билетът за пътуване „отиване-връщане“ е валиден в рамките на 6 месеца от датата на тръгване.
<br />5. За закъснения по обективни причини, превозвачът не носи отговорност.
<br />6. При неосъществяване на пътуването по вина на Турбус БГ ,същата възстановява само стойността на неосъществената част от маршрута.
<br />7. С  настоящия билет превозвачът сключва договор за превоз на пътници, като поема своите отговорности, съгласно чл.42 до чл.48 от Закона за автомобилните превози /обн. ДВ бр.82 от 17.09.1999 г., доп. ДВ бр.11 от 31.01.2002 г./
<br />8. Фирма Турбус БГ не носи отговорност за паспортни и митнически неуредици, както и за застраховка по рисковете „Живот“ и „Медицински разходи“ на пътника.
<br />9. Пътникът носи лична отговорност за нанесени от него щети на превозното средство.
</p>
                    </div>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <?php include("includes/footer_bg.html"); ?>
        </div>
    </body>
</html>