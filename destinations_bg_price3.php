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
                    <div id="menu">
                    	<ul>
                        	<li><a href="home_bg.php">Начало</a></li>
                        	<li><a href="destinations_bg.php" class="active">Линии</a></li>
                        	<li><a href="actual_bg.php">Актуално</a></li>
                        	<li><a href="offer_bg.php">Оферта</a></li>
                        	<li class="last"><a href="contacts_bg.php">Контакти</a></li>
                        </ul>
                    </div>
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
                    	<h1>ЦЕНОВА ЛИСТА</h1>
                    </div>
                    <table class="destinations dest-prices" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td colspan="3" width="460" class="bold bg-nb border-right">Превозвач:</td>
                                <td width="150" class="bold bg-nb">Заминава от:</td>
                            </tr>
                            <tr>
                            	<td colspan="3" width="460" class="title bg lblue border-right">ТУРИНГ БУС</td>
                                <td width="150" class="subtitle bg orange">СОФИЯ</td>
                            </tr>
                            <tr>
                            	<td width="210" class="bold bg">Присига в:</td>
                                <td width="100" class="small bg">посока</td>
                                <td width="150" class="small bg border-right">намаление</td>
                                <td width="150" class="bg">&nbsp;</td>
                            </tr>
                            <tr>
                            	<td rowspan="8" class="title bg orange border-right">БАНСКА БИСТРИЦА</td>
                                <td rowspan="4" class="asar bg border-right">В една посока</td>
                                <td rowspan="4" class="people bg border-right">НОРМАЛЕН<br />14->26г. и пенсионери<br />7->14г.<br />ДЕТСКИ</td>
                                <td class="price bg-aqua">150,00 лв</td>
                            </tr>
                            <tr>
                            	<td class="price bg">135,00 лв</td>
                            </tr>
                            <tr>
                            	<td class="price bg">120,00 лв</td>
                            </tr>
                            <tr>
                            	<td class="price bg">75,00 лв</td>
                            </tr>
                            <tr>
                            	<td rowspan="4" class="asar bg border-right">В две посоки</td>
                                <td rowspan="4" class="people bg border-right">НОРМАЛЕН<br />14->26г. и пенсионери<br />7->14г.<br />ДЕТСКИ</td>
                                <td class="price bg-aqua">245,00 лв</td>
                            </tr>
                            <tr>
                            	<td class="price bg">220,00 лв</td>
                            </tr>
                            <tr>
                            	<td class="price bg">196,00 лв</td>
                            </tr>
                            <tr>
                            	<td class="price bg">122,00 лв</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div id="prices-legend">
                    	<div class="row">
                            <div class="cell1"><b>Видове тарифи</b></div>
                            <div class="cell2">Една посока</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                    	<div class="row">
                            <div class="cell1">&nbsp;</div>
                            <div class="cell2">Две посоки</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                    	<div class="row">
                            <div class="cell1"><b>НОРМАЛЕН</b></div>
                            <div class="cell2">0т 26 до 60 г.</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                    	<div class="row">
                            <div class="cell1"><b>7->14г.</b></div>
                            <div class="cell2">0т 7 до 14 г.</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                    	<div class="row">
                            <div class="cell1"><b>14->26г. и пенсионери</b></div>
                            <div class="cell2">От 14 до 26 г. и пенсионери над 60 г.</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                    	<div class="row">
                            <div class="cell1"><b>ДЕТСКИ</b></div>
                            <div class="cell2">Деца от 3 до 7 г.</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                        <div class="row">
                        	<i class="small">Деца до 3г. пътуват безплатно без право на място</i>
                        </div>
                    </div>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <div id="footer">
            	<ul>
                    <li><a href="home_bg.php">Начало</a></li>
                    <li><a href="destinations_bg.php">Линии</a></li>
                    <li><a href="actual_bg.php">Актуално</a></li>
                    <li><a href="offer_bg.php">Оферта</a></li>
                    <li class="last"><a href="contacts_bg.php">Контакти</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>