<?php include("weather.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php require("/includes/title.html"); ?> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.pngFix.js"></script>
    </head>
    <body id="inner">
		<div id="shell">
			<div id="header">
            	<h1 id="logo"><a href="home_bg.php" class="no-text" title="Touring.bg">TOURING</a></h1>
                <div id="head-right">
                	<?php require("/includes/langs_bg.html"); ?>
                    <div class="cl no-text"><!-- --></div>
                    <?php require("/includes/menu-top/bg_destinations.html"); ?>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <div id="content">
            	<div id="left">
                	<?php require("/includes/readmore_wiki_bg.html"); ?>
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
                    	<h1>Линии</h1>
                    </div>
                    <div id="page-text">
						<table class="destinations main-dest" border="0" cellpadding="0" cellspacing="0">
                        	<thead>
                            	<tr>
                                    <th width="460">Разписания</th>
                                    <th width="150">Цени</th>
                                </tr>
                            </thead>
                            <tbody>
                            	
                            	<tr>
                                    <td><a href="destinations_bg_list1.php" class="white">1.СОФИЯ &ndash; ВАРШАВА </a></td>
                                    <td><a href="destinations_bg_price1.php">Ценова листа</a></td>
                                </tr>
                            	
                            	
                            	<tr>
                                    <td><a href="destinations_bg_list2.php" class="white">2.СОФИЯ &ndash; ВАРШАВА  <span class="lblue"><em><strong>!!! СЕЗОННА !!!</strong></em><strong></strong></span></a></td>
                                    <td><a href="destinations_bg_price2.php">Ценова листа</a></td>
                                </tr>
                            	<tr>
                                    <td><a href="destinations_bg_list3.php" class="white">3.СОФИЯ &ndash; БАНСКА БИСТРИЦА</a></td>
                                    <td><a href="destinations_bg_price3.php">Ценова листа</a></td>
                                </tr>
								<tr>
                                    <td><a href="destinations_bg_list4.php" class="white">4.СОФИЯ &ndash; БУДАПЕЩА</a></td>
                                    <td><a href="destinations_bg_price4.php">Ценова листа</a></td>
                                </tr>
                            	<tr>
                                    <td><a href="destinations_bg_list5.php" class="white">5.СОФИЯ &ndash; БУДАПЕЩА &ndash; БАНСКА БИСТРИЦА <span class="lblue"><em><strong>!!! СЕЗОННА !!!</strong></em><strong></strong></span></a></td>
                                    <td><a href="destinations_bg_price5.php">Ценова листа</a></td>
                                </tr>
                            	<tr>
                                    <td><a href="destinations_bg_list6.php" class="white">6.ВАРШАВА &ndash; БАНСКА БИСТРИЦА</a></td>
                                    <td><a href="destinations_bg_price6.php">Ценова листа</a></td>
                                </tr>
                                <tr>
                                    <td><a href="destinations_bg_list7.php" class="white">7.ВАРШАВА &ndash; БУДАПЕЩА</a></td>
                                    <td><a href="destinations_bg_price7.php">Ценова листа</a></td>
                                </tr>
                                <tr>
                                    <td><a href="destinations_bg_list8.php" class="white">8.БУДАПЕЩА &ndash; БАНСКА БИСТРИЦА &ndash; ВАРШАВА <span class="lblue"><em><strong>!!! СЕЗОННА !!!</strong></em><strong></strong></span></a></td>
                                    <td><a href="destinations_bg_price8.php">Ценова листа</a></td>
                                </tr>
                                <tr>
                                    <td><a href="destinations_bg_list9.php" class="white">9.БУДАПЕЩА &ndash; БАНСКА БИСТРИЦА</a></td>
                                    <td><a href="destinations_bg_price9.php">Ценова листа</a></td>
                                </tr>
                            </tbody>
                        </table>
						<table class="destinations main-dest" border="0" cellpadding="0" cellspacing="0">
                        	<thead>
                            	<tr>
                                    <th width="305">Полша</th>
                                    <th width="305">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>СОФИЯ &ndash; ВАРШАВА</td>
                                    <td>&nbsp;</td>
                                </tr>
                            	<tr>
                               
                                    <td> </td>
									<td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
						<table class="destinations main-dest" border="0" cellpadding="0" cellspacing="0">
                        	<thead>
                            	<tr>
                                    <th width="305">Словакия</th>
                                    <th width="305">Унгария</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>СОФИЯ &ndash; БАНСКА БИСТРИЦА</td>
                                    <td>СОФИЯ &ndash; БУДАПЕЩА</td>
                                </tr>
                            	<tr>
                                    <td>ВАРШАВА &ndash; БАНСКА БИСТРИЦА</td>
                                    <td>ВАРШАВА &ndash; БУДАПЕЩА</td>
                                </tr>
                            </tbody>
                        </table>
                    <div id="page-text">
                        <p><b>Предлагаме удобни автобусни връзки, от и до България с :</b></p>
                        <p>
                            &ndash; Прибалтийските държави &ndash; Литва (Каунас, Вилнюс), Латвия (Рига), Естония (Талин)<br />
                            &ndash; Скандинавските страни &ndash; Финландия (Хелзинки), Швеция (Гьотеборг, Стокхолм), Дания (Копенхаген), Норвегия (Осло)<br />
                            &ndash; Русия (Калининград)<br />
                            &ndash; Беларус (Минск)
                        </p>
                        <p>Връзките се извършват през Чехия или Полша.</p>
                    </div>
				   <center><a href="terms_bg.php">Условия за пътуване</a> </center></div>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <?php include("/includes/footer_bg.html"); ?>
        </div>
    </body>
</html>