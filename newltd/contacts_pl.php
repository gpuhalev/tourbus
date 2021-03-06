<?php include("weather.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>TOURING</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.pngFix.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
    </head>
    <body id="inner">
		<div id="shell">
			<div id="header">
            	<h1 id="logo"><a href="home_pl.php" class="no-text" title="Touring.bg">TOURING</a></h1>
                <div id="head-right">
                	<div id="langs">
                        <a href="contacts_bg.php" class="no-text" title="BG">BG</a>
                        <a href="contacts_pl.php" class="no-text" title="PL">PL</a>
                        <a href="contacts_cz.php" class="no-text" title="CZ">CZ</a>
                        <a href="contacts_en.php" class="no-text" title="EN">EN</a>
                    </div>
                    <div class="cl no-text"><!-- --></div>
                    <div id="menu">
                    	<ul>
                        	<li><a href="home_pl.php">Strona Glówna</a></li>
                        	<li><a href="destinations_pl.php">Linie</a></li>
                        	<li><a href="actual_pl.php">Aktualności</a></li>
                        	<li><a href="offer_pl.php">Oferta</a></li>
                        	<li class="last"><a href="contacts_pl.php" class="active">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <div id="content">
            	<div id="left">
                	<div id="readmore" class="box">
                    	<h1>Czytaj więcej:</h1>
                        <ul>
                        	<li><a href="http://pl.wikipedia.org/wiki/SOFIA">SOFIA w Wikipedii</a></li>
                            <li><a href="http://pl.wikipedia.org/wiki/Brno">BRNO w Wikipedii</a></li>
                            <li><a href="http://pl.wikipedia.org/wiki/WARSZAWA">WARSZAWA w Wikipedii</a></li>
                            <li><a href="http://pl.wikipedia.org/wiki/BUDAPESZT">BUDAPESZT w Wikipedii</a></li>
                            <li><a href="http://pl.wikipedia.org/wiki/Bratislava">BRATYSŁAWA w Wikipedii</a></li>
                        </ul>
                    </div>
                	<div id="buylink" class="box"><h1 style="background: url('css/images/left-weather-head.png') repeat scroll 0 0 transparent;">E-Tickets:</h1><a style="width: 200px; margin: 5px auto; display: block;" href="https://eshop.amsbus.cz/tourbg/koupitjizdenku/"><img style="width: 100%;" alt="http://img.artlebedev.ru/everything/gosloto/video/process/gosloto-video-process-click.gif" src="http://img.artlebedev.ru/everything/gosloto/video/process/gosloto-video-process-click.gif"></a></div><div id="weather" class="box">
                    	<h1>Wiadomość:</h1>
                        <p style="padding:10px 20px 0;"><strong>Od 01.07.2013 ''TOURING Bus'' Sp. z o.o. otwiera nowe sezonowe linie, które są opisane w zakładce ''linie''.</strong></p>
                        <p style="padding:10px 20px 0;"><strong> Możecie Państwo uzyskać więcej informacji kontaktując sie z nami telefonicznie. </strong></p>
                    </div>
                    <div id="left-contacts">
                    	<p>Adres: <b>WARSZAWA 00-728</b></p>
                        <p><b>ul. "Bobrowiecka" 4, lok.4</b></p>
                      <p>Telefon: <b>0048 22 243 14 72</b></p>
                        <p>Mobile: <b>0048 607 185 278</b></p>
                        <p>E-mail:<a href="mailto:touring.pl@touring.bg"> </a><a href="mailto:touringbuspl@abv.bg">touringbuspl@abv.bg</a></p>
                        <p>E-mail: <a href="mailto:touring.pl@touring.bg">touring.pl@touring.bg</a><br />
                        </p>
                      <p>&nbsp;</p>
                    </div>
                </div>
                <div id="right">
                	<div id="crumb">
                    	<h1>Kontakt</h1>
                    	<!--<input type="hidden" id="toMail" value="touring.pl@touring.bg" />-->
                    	<input type="hidden" id="toMail" value="touring.pl@touring.bg" />
                    </div>
                    <div id="page-text">
                    	<div class="contacts-cell">
                            <h1>Bułgaria</h1>
                            <h2>SOFIA</h2>
                            <p>
                                Adres: 1202 SOFIA<br />
                                „Maria Louisa” blvd. 102<br />
                                Dworzec autobusowy „Serdika”, biuro 69<br />
                                Telefon: 00359 2 980 68 62<br />
                                Mobile: 00359 89 449 94 97<br />
                                Telefon/Fax: 00359 2 981 50 37<br />
                                E-mail: <a href="mailto:touringbus@touring.bg">touringbus@touring.bg</a><br />
                                E-mail: <a href="mailto:touringbus@touring.bg">touringbus@abv.bg</a><br />
                                Е-mail: <a href="mailto:tourbusbg@abv.bg">tourbusbg@abv.bg</a>
                            </p>
                        </div> 
                        <div class="contacts-form" id="contact_form">
                        	<div class="row">
                            	<div class="cell1"><b>Imię:</b></div>
                                <div class="cell2"><input type="text" class="text" id="name"/></div>
                            </div>
                        	<div class="row">
                            	<div class="cell1"><b>E-mail:</b></div>
                                <div class="cell2"><input type="text" class="text" id="mail"/></div>
                            </div>
                        	<div class="row-textarea">
                            	<div class="cell1"><b>Wiadomość:</b></div>
                                <div class="cell2"><textarea id="message"></textarea></div>
                            </div>
                        	<div class="row">
                            	<div class="cell1">&nbsp;</div>
                                <div class="cell2"><input type="submit" class="submit" value="Wysłać" onclick="sendMail(); return false;"/></div>
                            </div>
                        </div>
                        <div id="success_msg" style="display: none;">Pańska wiadomość została pomyślnie wysłana!</div>
                        <div class="cl no-text"><!-- --></div>
                       
                        <div class="contacts-cell">
                            <h1>Polska</h1>
                          <h2>WARSZAWA</h2>
                            <p>
                                Adres: 00-728 WARSZAWA<br />
                                ul. „Bobrowiecka” 4, lok.4<br />
                                Telefon: 0048 22 243 14 72<br />
                                Mobile: 0048 607 185 278<br />
                            E-mail:<a href="mailto:touring.pl@touring.bg"> </a><a href="mailto:touringbuspl@abv.bg">touringbuspl@abv.bg</a><br />
                            E-mail: <a href="mailto:touring.pl@touring.bg">touring.pl@touring.bg</a><a href="mailto:touringbuspl@abv.bg"></a><a href="mailto:touring.pl@touring.bg"></a><a href="mailto:touringbuspl@abv.bg"></a><a href="mailto:touring.pl@touring.bg"></a><a href="mailto:touring.pl@touring.bg"></a><br />
                                Е-mail: <a href="mailto:tourbusbg@abv.bg">tourbusbg@abv.bg</a><br />
                                Bank Millennium S.A.<br />
                                56116022020000000219364423
                            </p>
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