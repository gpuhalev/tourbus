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
            	<h1 id="logo"><a href="home_pl.php" class="no-text" title="Touring.bg">TOURING</a></h1>
                <div id="head-right">
                	<?php require("/includes/langs_bg.html"); ?>
                    <div class="cl no-text"><!-- --></div>
                    <div id="menu">
                    	<ul>
                        	<li><a href="home_pl.php">Strona Glówna</a></li>
                        	<li><a href="destinations_pl.php" class="active">Linie</a></li>
                        	<li><a href="actual_pl.php">Aktualności</a></li>
                        	<li><a href="offer_pl.php">Oferta</a></li>
                        	<li class="last"><a href="contacts_pl.php">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <div id="content">
            	<div id="left">
                	<?php require("/includes/readmore_wiki_pl.html"); ?>
                    <div id="buylink" class="box"><h1 style="background: url('css/images/left-weather-head.png') repeat scroll 0 0 transparent;">E-Tickets:</h1><a style="width: 200px; margin: 5px auto; display: block;" href="https://eshop.amsbus.cz/tourbg/koupitjizdenku/" target="_blank"><img style="width: 100%;" alt="images/gosloto-video-process-click.gif" src="images/gosloto-video-process-click.gif"></a></div><div id="weather" class="box">
                    	<h1>Wiadomość:</h1>
                        <p style="padding:10px 20px 0;"><strong>Szanowni Państwo, możecie zarezerwować i kupić bilet przez E Pay i Easy Pay. </strong></p>
                        <p style="padding:10px 20px 0;"><strong> Więcej informacji mogą Państwo uzyskać kontaktując sie z nami telefonicznie.</strong></p>
                    </div>
                    <div id="left-contacts">
                    	<p>Adres: <b>WARSZAWA 00-728</b></p>
                        <p><b>ul. "Bobrowiecka" 4, lok.4</b></p>
                        <p>Telefon: <b>0048 22 243 14 72</b></p>
                        <p>Mobile: <b>0048 607 185 278</b></p>
                        <p>E-mail:<a href="mailto:touring.pl@touring.bg"> </a><a href="mailto:touringbuspl@abv.bg">touringbuspl@abv.bg</a></p>
                        <p>E-mail: <a href="mailto:touring.pl@touring.bg">touring.pl@touring.bg</a><br />
                        </p>
                    </div>
                </div>
                <div id="right">
                	<div id="crumb">
                    	<h1>CENNIK</h1>
                    </div>
                    <table class="destinations dest-prices" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td colspan="3" width="460" class="bold bg-nb border-right">Przewoźnik:</td>
                                <td width="150" class="bold bg-nb">Wyjazd z miast:</td>
                            </tr>
                            <tr>
                            	<td colspan="3" width="460" class="title bg lblue border-right">TOURING BUS</td>
                                <td width="150" class="subtitle bg orange">SOFIA</td>
                            </tr>
                            <tr>
                            	<td width="210" class="bold bg">Przyjazd do:</td>
                                <td width="100" class="small bg">strona</td>
                                <td width="150" class="small bg border-right">zniżka</td>
                                <td width="150" class="bg">&nbsp;</td>
                            </tr>
                            <tr>
                            	<td rowspan="8" class="title bg orange border-right">BUDAPESZT</td>
                                <td rowspan="4" class="asar bg border-right">AS</td>
                                <td rowspan="4" class="people bg border-right">NORMALNY<br />14->26l. i pow. 60l.<br />7->14l.<br />DZIECIĘCA</td>
                                <td class="price bg-aqua">50,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">45,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">40,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">25,00 €</td>
                            </tr>
                            <tr>
                            	<td rowspan="4" class="asar bg border-right">AR</td>
                                <td rowspan="4" class="people bg border-right">NORMALNY<br />14->26l. i pow. 60l.<br />7->14l.<br />DZIECIĘCA</td>
                                <td class="price bg-aqua">85,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">77,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">68,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">43,00 €</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="destinations dest-prices" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td colspan="3" width="460" class="bold bg-nb border-right">Przewoźnik:</td>
                                <td width="150" class="bold bg-nb">Wyjazd z miast:</td>
                            </tr>
                            <tr>
                            	<td colspan="3" width="460" class="title bg lblue border-right">TOURING BUS</td>
                                <td width="150" class="subtitle bg orange">SOFIA</td>
                            </tr>
                            <tr>
                            	<td width="210" class="bold bg">Przyjazd do:</td>
                                <td width="100" class="small bg">strona</td>
                                <td width="150" class="small bg border-right">zniżka</td>
                                <td width="150" class="bg">&nbsp;</td>
                            </tr>
                            <tr>
                            	<td rowspan="8" class="title bg orange border-right"><p><strong>BAŃSKA BYSTRICA</strong></p></td>
                                <td rowspan="4" class="asar bg border-right">AS</td>
                                <td rowspan="4" class="people bg border-right">NORMALNY<br />14->26l. i pow. 60l.<br />7->14l.<br />DZIECIĘCA</td>
                                <td class="price bg-aqua">75,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">68,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">60,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">38,00 €</td>
                            </tr>
                            <tr>
                            	<td rowspan="4" class="asar bg border-right">AR</td>
                                <td rowspan="4" class="people bg border-right">NORMALNY<br />14->26l. i pow. 60l.<br />7->14l.<br />DZIECIĘCA</td>
                                <td class="price bg-aqua">125,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">113,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">100,00 €</td>
                            </tr>
                            <tr>
                            	<td class="price bg">63,00 €</td>
                            </tr>
                        </tbody>
                    </table>
                  
                    <div id="prices-legend">
                    	<div class="row">
                            <div class="cell1"><b>RODZAJE TARYF</b></div>
                            <div class="cell2">AS &ndash; w jedną stronę</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                    	<div class="row">
                            <div class="cell1">&nbsp;</div>
                            <div class="cell2">AR &ndash; w dwie strony</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                    	<div class="row">
                            <div class="cell1"><b>NORMALNY</b></div>
                            <div class="cell2">od 26 do 60 lat</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                    	<div class="row">
                            <div class="cell1"><b>14->26l. i pow. 60l.</b></div>
                            <div class="cell2">od 14 lat do ukończenia 26 lat i powyżej 60 lat, emeryci, renciści</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                    	<div class="row">
                            <div class="cell1"><b>7->14l.</b></div>
                            <div class="cell2">od 7 do 14 lat</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                    	<div class="row">
                            <div class="cell1"><b>DZIECIĘCA</b></div>
                            <div class="cell2">dzieci od 3 lat do ukończenia 7 lat</div>
                            <div class="cl no-text"><!-- --></div>
                        </div>
                        <div class="row">
                        	<i class="small">Dzieci do ukończenia 3 lata &ndash; za darmo bez prawa na miejsce</i>
                        </div>
                    </div>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <div id="footer">
            	<ul>
                    <li><a href="home_pl.php">Strona Glówna</a></li>
                    <li><a href="destinations_pl.php">Linie</a></li>
                    <li><a href="actual_pl.php">Aktualności</a></li>
                    <li><a href="offer_pl.php">Oferta</a></li>
                    <li class="last"><a href="contacts_pl.php">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>