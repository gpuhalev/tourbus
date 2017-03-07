<?php include("weather.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php require("includes/title.html"); ?> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.pngFix.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
    </head>
    <body id="inner">
		<div id="shell">
			<div id="header">
            	<h1 id="logo"><a href="home_bg.php" class="no-text" title="Touring.bg">TOURING</a></h1>
                <div id="head-right">
                	<?php require("includes/langs_bg.html"); ?>
                    <div class="cl no-text"><!-- --></div>
                    <?php require("includes/menu-top/bg_contacts.html"); ?>
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
                        <p><b>бул."Мария Луиза" 102</b></p>
                        <p><b>Автогара "Сердика", офис 69</b></p>
                        <p>Телефон: <b>+359 2 980 68 62</b></p>
                        <p>Моб. тел.: <b>+359 89 449 94 97</b></p>
                        <p>Телефон/Факс: <b>+359 2 981 50 37</b></p>
                        <p>Е-майл: <a href="mailto:touringbus@touring.bg">touringbus@touring.bg</a></p>
                        <p>Е-майл: <a href="mailto:tourbus@abv.bg">tourbusbg@abv.bg</a></p>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div id="right">
                	<div id="crumb">
                    	<h1>Контакти</h1>
                    	<input type="hidden" id="toMail" value="touringbus@touring.bg" />
                    </div>
                    <div id="page-text">
                    	<div class="contacts-cell">
                            <h1>България</h1>
                            <h2>СОФИЯ</h2>
                            <p>
                                Адрес: 1202 София<br />
                                бул."Мария Луиза" 102<br />
                                Автогара "Сердика", офис 69<br />
                                Телефон: 00359 2 980 68 62<br />
                                Моб. тел.: 00359 89 449 94 97<br />
                                Телефон/Факс: 00359 2 981 50 37<br />
                                Е-майл: <a href="mailto:touringbus@touring.bg">touringbus@touring.bg</a><br />
                                <br />
                                Е-майл: <a href="mailto:tourbusbg@abv.bg">tourbusbg@abv.bg</a>
                            </p>
                        </div>
                        <div class="contacts-form" id="contact_form">
                        	<div class="row">
                            	<div class="cell1"><b>Име:</b></div>
                                <div class="cell2"><input type="text" class="text" id="name"/></div>
                            </div>
                        	<div class="row">
                            	<div class="cell1"><b>Е-майл:</b></div>
                                <div class="cell2"><input type="text" class="text" id="mail"/></div>
                            </div>
                        	<div class="row-textarea">
                            	<div class="cell1"><b>Съобщение:</b></div>
                                <div class="cell2"><textarea id="message"></textarea></div>
                            </div>
                        	<div class="row">
                            	<div class="cell1">&nbsp;</div>
                                <div class="cell2"><input type="submit" class="submit" value="Изпрати" onclick="sendMail(); return false;"/></div>
                            </div>
                        </div>
                        <div id="success_msg" style="display: none;">Вашето запитване беше изпратено успешно!</div>
                        <div class="cl no-text"><!-- --></div>
                        <div class="contacts-cell">
                            <h1>Полша</h1>
                            <h2>ВАРШАВА</h2>
                            <p>
                                Адрес: 00-728 Варшава<br />
                                ул. "Бобровиецка" 4, ап.4<br />
                                Телефон: 0048 22 243 14 72<br />
                                Моб. тел.: 0048 607 185 278<br />
                            Е-майл:<a href="mailto:touringbuspl@abv.bg">touringbuspl@abv.bg</a><br />
                            Е-майл:<a href="mailto:touring.pl@touring.bg">touring.pl@touring.bg</a><a href="mailto:touringbuspl@abv.bg"></a><br />
                                Bank Millennium S.A.<br />
                               91116022020000000222361974                          </p>
</div>
                        <div class="cl no-text"><!-- --></div>
                        <div class="contacts-cell">
                            <h1>&nbsp;</h1>
</div>
                        <div class="contacts-cell">
                            <h1>&nbsp;</h1>
</div>
                        <div class="cl no-text"><!-- --></div>
                    </div>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <?php include("includes/footer_bg.html"); ?>
        </div>
    </body>
</html>