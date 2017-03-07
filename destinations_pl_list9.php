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
                    <?php require("includes/menu-top/pl_destinations.html"); ?>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <div id="content">
            	<div id="left">
                	<?php require("includes/readmore_wiki_pl.html"); ?>
                    <div id="buylink" class="box"><h1 style="background: url('css/images/left-weather-head.png') repeat scroll 0 0 transparent;">E-Tickets:</h1><a style="width: 200px; margin: 5px auto; display: block;" href="https://eshop.amsbus.cz/tourbg/koupitjizdenku/" target="_blank"><img style="width: 100%;" alt="images/gosloto-video-process-click.gif" src="images/gosloto-video-process-click.gif"></a></div><div id="weather" class="box">
                    	<h1>Wiadomość:</h1>
                        <p style="padding:10px 20px 0;"><strong>Szanowni Państwo, możecie zarezerwować i kupić bilet przez E Pay i Easy Pay. </strong></p>
                        <p style="padding:10px 20px 0;"><strong> Więcej informacji mogą Państwo uzyskać kontaktując sie z nami telefonicznie.</strong></p>
                    </div>
                    <div id="left-contacts">
                    	<p>Adres: <b>WARSZAWA 00-728</b></p>
                        <p><b>ul. "Bobrowiecka" 4, lok.4</b></p>
                        <p>Mobile: <b>0048 607 185 278</b></p>
                        <p>E-mail: <a href="mailto:touring.pl@touring.bg">touring.pl@touring.bg</a><br />
                        </p>
                    </div>
                </div>
                <div id="right">
                	<div id="crumb">
                    	<h1><strong>WĘGRY</strong><img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" /><strong>SŁOWACJA</strong></h1>
                        <h2 class="fl"><strong>BUDAPESZT</strong><img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />BAŃSKA BYSTRICA</h2>
                	</div>
                    <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
							 <th width="100" class="orange">01:15 &ndash; 6</th>
                                <th width="410" class="white">BUDAPESZT&nbsp;&nbsp;&nbsp;<strong>Dworzec Autobusowy &quot;Orange Ways&quot;</strong></th>
                                <th width="100">&nbsp;</th>
								
                               
                            </tr>
                            <tr>
                                <td class="orange bold-big">03:30 &ndash; 6</td>
                                <td class="white">BAŃSKA BYSTRICA  Dw.  Autobusowy, st. 6</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tfoot>
                    </table>
                	<div id="crumb2">
                   	  <h1>SŁOWACJA<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" /><strong>WĘGRY</strong></h1>
                        <h2>BAŃSKA BYSTRICA<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" /><strong>BUDAPESZT</strong></h2>
                    </div>
                    <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="lblue bold-big">21:00 &ndash; 7</td>
                                <td width="410" class="white"><p>BAŃSKA BYSTRICA  Dw.  Autobusowy, st. 6</p></td>
                                <td width="100">&nbsp;</td>
                            </tr>
                            <tr>
                                <th width="100" class="lblue bold-big">23:55 &ndash; 7</th>
                                <th class="white">BUDAPESZT&nbsp;&nbsp;&nbsp;<strong>Dworzec Autobusowy &quot;Orange Ways&quot;</strong></th>
                                <th>&nbsp;</th>
                            </tr>
                        </tbody>
                    </table>
                    <div id="days">
                   	  <div class="cell">1 &ndash; poniedziałek</div>
                        <div class="cell">3 &ndash; środa</div>
                        <div class="cell">5 &ndash; piątek</div>
                        <div class="cell">7 &ndash; niedziela</div>
                        <div class="cl no-text"><!-- --></div>
                    	<div class="cell">2 &ndash; wtorek</div>
                        <div class="cell">4 &ndash; czwartek</div>
                        <div class="cell">6 &ndash; sobota</div>
                        <div class="cl no-text"><!-- --></div>
                    </div>
                </div>
                <div class="cl no-text"><!-- -->-</div>
            </div>
            <?php include("includes/footer_pl.html"); ?>
        </div>
    </body>
</html>