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
            	<h1 id="logo"><a href="home_pl.php" class="no-text" title="Touring.bg">TOURING</a></h1>
                <div id="head-right">
                	<?php require("includes/langs_bg.html"); ?>
                    <div class="cl no-text"><!-- --></div>
                    <?php require("includes/menu-top/pl_actual.html"); ?>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <div id="content">
            	<div id="left">
                	<?php require("includes/readmore_wiki_pl.html"); ?>
                	<div id="buylink" class="box"><h1 style="background: url('css/images/left-weather-head.png') repeat scroll 0 0 transparent;">E-Tickets:</h1><a style="width: 200px; margin: 5px auto; display: block;" href="https://eshop.amsbus.cz/tourbg/koupitjizdenku/" target="_blank"><img style="width: 100%;" alt="images/gosloto-video-process-click.gif" src="images/gosloto-video-process-click.gif"></a></div><div id="weather" class="box">
                    	<h1>Wiadomość:</h1>
                        <p style="padding:10px 20px 0;"><strong>Szanowni Państwo, możecie zarezerwować i kupić bilet przez E Pay i Easy Pay. </strong></p>
                        <p style="padding:10px 20px 0;"><strong> Więcej informacji mogą Państwo uzyskać kontaktując sie z nami telefonicznie. </strong></p>
                    </div>
                    <div id="left-contacts">
                    	<p>Adres: <b>Warszawa 00-728</b></p>
                        <p><b>ul. "Bobrowiecka" 4, lok.4</b></p>
                        <p>Mobile: <b>0048 607 185 278</b></p>
                        <p>E-mail:<a href="mailto:touring.pl@touring.bg"> </a><a href="mailto:touringbuspl@abv.bg">touringbuspl@abv.bg</a></p>
                        <p>E-mail: <a href="mailto:touring.pl@touring.bg">touring.pl@touring.bg</a></p>
                    </div>
                </div>
                <div id="right">
                	<div id="crumb">
                    	<h1>Aktualności</h1>
                    </div>
                    <div id="page-text">
						<p><b>Możecie Państwu wygodnie podróżować naszymi autokarami z Bułgarii lub do Bułgarii z :</b></p>
                        <p>
                        	&ndash; Państw Bałtyckich &ndash; Litwa (Kaunas, Wilno), Łotwa (Ryga), Estonia (Tallin)<br />
                            &ndash; Skandynawii &ndash; Finlandia (Helsinki), Szwecja (Goeteborg, Sztokholm), Dania (Kopenhaga), Norwegia (Oslo)<br />
                            &ndash; Rosji (Kaliningrad)<br />
                            &ndash; Białorusi (Mińsk)
						</p>
                        <p>Połączenia są realizowane przez Czechy i Polskę.</p>
                    </div>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <?php include("includes/footer_pl.html"); ?>
        </div>
    </body>
</html>