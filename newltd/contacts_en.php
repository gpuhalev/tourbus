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
            	<h1 id="logo"><a href="home_en.php" class="no-text" title="Touring.bg">TOURING</a></h1>
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
                        	<li><a href="home_en.php">Home</a></li>
                        	<li><a href="destinations_en.php">Destinations</a></li>
                        	<li><a href="actual_en.php">Connections</a></li>
                        	<li><a href="offer_en.php">Offer</a></li>
                        	<li class="last"><a href="contacts_en.php" class="active">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <div id="content">
            	<div id="left">
                	<div id="readmore" class="box">
                    	<h1>Read more about:</h1>
                        <ul>
                        	<li><a href="http://en.wikipedia.org/wiki/SOFIA">SOFIA in Wikipedia</a></li>
                            <li><a href="https://en.wikipedia.org/wiki/Brno">BRNO in Wikipedia</a></li>
                            <li><a href="http://en.wikipedia.org/wiki/WARSAW">WARSAW  in Wikipedia</a></li>
                            <li><a href="http://en.wikipedia.org/wiki/BUDAPEST">BUDAPEST in Wikipedia</a></li>
                            <li><a href="http://en.wikipedia.org/wiki/BRATISLAVA">BRATISLAVA in Wikipedia</a></li>
                        </ul>
                    </div>
                	<div id="buylink" class="box"><h1 style="background: url('css/images/left-weather-head.png') repeat scroll 0 0 transparent;">E-Tickets:</h1><a style="width: 200px; margin: 5px auto; display: block;" href="https://eshop.amsbus.cz/tourbg/koupitjizdenku/"><img style="width: 100%;" alt="http://img.artlebedev.ru/everything/gosloto/video/process/gosloto-video-process-click.gif" src="http://img.artlebedev.ru/everything/gosloto/video/process/gosloto-video-process-click.gif"></a></div><div id="weather" class="box">
                    	<h1>Notification:</h1>
                        <p style="padding:10px 20px 0;"><strong>Dear customers,</strong></p>
                        <p style="padding:10px 20px 0;"><strong> From 01.07.2013 &quot;TOURING Bus&quot; LTD opens new seasonal lines which are described in the &quot;Destinations&quot;.</strong></p>
                        <p style="padding:10px 20px 0;"><strong> You can get more information by contacting us by phone.</strong></p>
                    </div>
                    <div id="left-contacts">
                    	<p>Address: <b>SOFIA 1202</b></p>
                        <p><b>„Maria Louisa” blvd. 102</b></p>
                        <p><b>Bus station "Serdika", office 69</b></p>
                        <p>Telephone: <b>+359 2 980 68 62</b></p>
                        <p>Mobile: <b>+359 89 449 94 97</b></p>
                        <p>Telephone/Fax: <b>+359 2 981 50 37</b></p>
                        <p>E-mail: <a href="mailto:touringbus@touring.bg">touringbus@touring.bg</a></p>
                        <p>E-mail: <a href="mailto:touringbus@abv.bg">touringbus@abv.bg</a></p>
                    </div>
                </div>
                <div id="right">
                	<div id="crumb">
                    	<h1>Contacts</h1>
                    	<input type="hidden" id="toMail" value="touringbus@touring.bg" />
                    </div>
                    <div id="page-text">
                    	<div class="contacts-cell">
                            <h1>Bulgaria</h1>
                            <h2>SOFIA</h2>
                            <p>
                                Address: 1202 SOFIA<br />
                                „Maria Louisa” blvd. 102<br />
                                Bus station „Serdika”, office 69<br />
                                Telephone: 00359 2 980 68 62<br />
                                Mobile: 00359 89 449 94 97<br />
                                Telephone/Fax: 00359 2 981 50 37<br />
                                E-mail: <a href="mailto:touringbus@touring.bg">touringbus@touring.bg</a><br />
                                E-mail: <a href="mailto:touringbus@touring.bg">touringbus@abv.bg</a>
                            </p>
                        </div>
                        <div class="contacts-form" id="contact_form">
                        	<div class="row">
                            	<div class="cell1"><b>Name:</b></div>
                                <div class="cell2"><input type="text" class="text" id="name"/></div>
                            </div>
                        	<div class="row">
                            	<div class="cell1"><b>E-mail:</b></div>
                                <div class="cell2"><input type="text" class="text" id="mail"/></div>
                            </div>
                        	<div class="row-textarea">
                            	<div class="cell1"><b>Message:</b></div>
                                <div class="cell2"><textarea id="message"></textarea></div>
                            </div>
                        	<div class="row">
                            	<div class="cell1">&nbsp;</div>
                                <div class="cell2"><input type="submit" class="submit" value="Send" onclick="sendMail(); return false;"/></div>
                            </div>
                        </div>
                        <div id="success_msg" style="display: none;">Your message was sent successfuly!</div>
                        <div class="cl no-text"><!-- --></div>
                        
                        <div class="contacts-cell">
                            <h1>Poland</h1>
                            <h2>WARSAW</h2>
                            <p>
                                Address: 00-728 WARSAW<br />
                                „Bobrowiecka” str. 4, ap.4<br />
                                Telephone: 0048 22 243 14 72<br />
                                Mobile: 0048 607 185 278<br />
                            E-mail: <a href="mailto:touringbuspl@abv.bg">touringbuspl@abv.bg</a><a href="mailto:touring.pl@touring.bg"></a><a href="mailto:touring.pl@touring.bg"></a><a href="mailto:touring.pl@touring.bg"></a><br />
                            E-mail: <a href="mailto:touring.pl@touring.bg">touring.pl@touring.bg</a><a href="mailto:touringbuspl@abv.bg"></a><a href="mailto:touring.pl@touring.bg"></a><br />
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
                    <li><a href="home_en.php">Home</a></li>
                    <li><a href="destinations_en.php">Destinations</a></li>
                    <li><a href="actual_en.php">Connections</a></li>
                    <li><a href="offer_en.php">Offer</a></li>
                    <li class="last"><a href="contacts_en.php">Contacts</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>