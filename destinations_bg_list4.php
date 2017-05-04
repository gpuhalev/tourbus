<?php include("weather.php"); ?>
<?php require("includes/timetables/main.php")?>
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
                        <p>Е-майл: <a href="mailto:touringbus@abv.bg">tourbusbg@abv.bg</a></p>
                    </div>
                </div>
                <div id="right">
                	<div id="crumb">
                    	<h1>БЪЛГАРИЯ<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />УНГАРИЯ</h1>
                        <h2 class="fl">СОФИЯ<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />БУДАПЕЩА</h2>
                        <h3 class="fr"></h3>
                    </div>
                    <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="100" class="lblue bold-big"><?php echo $sofia;?> &ndash; 5</th>
                                <th class="white">СОФИЯ&nbsp;&nbsp;&nbsp;Автогара "Сердика"</th>
                                <th>&nbsp;</th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><span class="aqua bold">Транзит: Сърбия</span></td>
                                <td class="aqua bold">&nbsp;</td>
                            </tr>
                          <tr>
                                <td class="lblue bold-big"><?php echo $budapest;?> &ndash; 6</td>
                                <td class="white">БУДАПЕЩА&nbsp;&nbsp;&nbsp;  Автогара "Ориндж уейс"</td>
                                <td>&nbsp;</td>
                          </tr>
                             
                        </tbody>
                    </table>
                	<div id="crumb2">
                    	<h1>УНГАРИЯ<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />БЪЛГАРИЯ</h1>
                        <h2>БУДАПЕЩА<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />СОФИЯ</h2>
                    </div>
                    <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td width="100" class="orange bold-big"><p>23:55 &ndash; 7</p></td>
                                <td class="white">БУДАПЕЩА&nbsp;&nbsp;&nbsp;  Автогара "Ориндж уейс"</td>
                                <td>&nbsp;</td>
                            </tr>
                           <tr>
                                <td class="orange bold-big">&nbsp;</td>
                                <td class="gray"><span class="aqua bold">Транзит: Сърбия</span></td>
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <th class="orange bold-big">14:30 &ndash; 1</th>
                                <th class="white">СОФИЯ&nbsp;&nbsp;&nbsp;Автогара "Сердика"</th>
                                <th>&nbsp;</th>
                            </tr>
							
                        </tfoot>
                    </table>
                    <div id="days">
                    	<div class="cell">1 &ndash; понеделник</div>
                        <div class="cell">3 &ndash; сряда</div>
                        <div class="cell">5 &ndash; петък</div>
                        <div class="cell">7 &ndash; неделя</div>
                        <div class="cl no-text"><!-- --></div>
                    	<div class="cell">2 &ndash; вторник</div>
                        <div class="cell">4 &ndash; четвъртък</div>
                        <div class="cell">6 &ndash; събота</div>
                        <div class="cl no-text"><!-- --></div>
                    </div>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <?php include("includes/footer_bg.html"); ?>
        </div>
    </body>
</html>