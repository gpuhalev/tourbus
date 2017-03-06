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
                    <?php require("/includes/menu-top/pl_destinations.html"); ?>
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
                        <p>E-mail: <a href="mailto:touring.pl@touring.bg">touring.pl@touring.bg</a><br />
                        </p>
                    </div>
                </div>
                <div id="right">
               	  <div id="crumb">
                    	<h1><strong>WĘGRY, SŁOWACJA</strong><img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />POLSKA</h1>
                        <h2 class="fl"><strong>BUDAPESZT, </strong>BAŃSKA BYSTRICA<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" /><strong>WARSZAWA,  ŁÓDŹ, CZĘSTOCHOWA, KATOWICE, KRAKÓW </strong></h2>
                        <h3 class="fr">Rozkład ważny od 01.07-30.08</h3>
                    </div>
                    <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="100" class="orange bold-big">&nbsp;</td>
                                <td width="410" class="red">&nbsp;</td>
                                <td width="100">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    
                  <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
							 <th width="100" class="orange">06:15 &ndash; 2</th>
                                <th width="410" class="white">BUDAPESZT&nbsp;&nbsp;&nbsp;<strong>Dworzec Autobusowy &quot;Orange Ways&quot;</strong> </th>
                                <th width="100">&nbsp;</th>
								
                               
                            </tr>
                            <tr>
                                <td class="orange bold-big">08:30 &ndash; 2</td>
                                <td class="white">BAŃSKA BYSTRICA&nbsp;&nbsp;&nbsp;Dw. Autobusowy, st. 6</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big">14:00 &ndash; 2</td>
                                <td class="white">KRAKÓW&nbsp;&nbsp;&nbsp;RDA, ul.  &quot;Bosacka&quot; 18 – górna płyta</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big">16:00 &ndash; 2</td>
                                <td class="white">KATOWICE&nbsp;&nbsp;&nbsp;Dworzec PKS, ul.  &quot;P. Skargi&quot;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big">17:30 &ndash; 2</td>
                                <td class="white">CZĘSTOCHOWA&nbsp;&nbsp;&nbsp;Dworzec PKS, al.  &quot;Wolności&quot; 45, st. 13</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big">19:30 &ndash; 2</td>
                                <td class="white">ŁÓDŹ&nbsp;&nbsp;&nbsp;Dworzec PKP Łódź  Kaliska, ul. &quot;Karolewska&quot; 55, przed głównym wejściem – stanowisko  SINDBAD</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big">21:30 &ndash; 2</td>
                                <td class="white">WARSZAWA&nbsp;&nbsp;&nbsp;Dworzec  &quot;Zachodni&quot; PKS, stan. &quot;Międzynarodowe&quot;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tfoot>
                    </table>
                	<div id="crumb2">
                   	  <h1>POLSKA<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" /><strong>SŁOWACJA, WĘGRY </strong></h1>
                        <h2><strong>WARSZAWA, ŁÓDŹ, CZĘSTOCHOWA, KATOWICE, KRAKÓW </strong><img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" /><strong>BAŃSKA BYSTRICA,  BUDAPESZT </strong></h2>
                  </div>
                  
                  <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="100" class="orange bold-big">&nbsp;</td>
                                <td width="410" class="red">&nbsp;</td>
                                <td width="100">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                  
                  
                    <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="lblue bold-big">09:30 &ndash; 3</td>
                                <td width="410" class="white">WARSZAWA&nbsp;&nbsp;&nbsp;Dworzec  &quot;Zachodni&quot; PKS, stan. &quot;Międzynarodowe&quot;</td>
                                <td width="100">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="lblue bold-big">11:30 &ndash; 3</td>
                                <td width="410" class="white">ŁÓDŹ&nbsp;&nbsp;&nbsp;Dworzec PKP Łódź  Kaliska, ul. &quot;Karolewska&quot; 55, przed głównym wejściem – stanowisko  SINDBAD</td>
                                <td width="100">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="lblue bold-big">13:45 &ndash; 3</td>
                                <td width="410" class="white">CZĘSTOCHOWA&nbsp;&nbsp;&nbsp;Dworzec PKS, al.  &quot;Wolności&quot; 45, st. 13</td>
                                <td width="100">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="lblue bold-big">15:00 &ndash; 3</td>
                                <td width="410" class="white">KATOWICE&nbsp;&nbsp;&nbsp;Dworzec PKS, ul.  &quot;P. Skargi&quot;</td>
                                <td width="100">&nbsp;</td>
                            </tr>
                          <tr>
                                <td class="lblue bold-big">16:45 &ndash; 3</td>
                                <td class="white"><p>KRAKÓW&nbsp;&nbsp;&nbsp;RDA, ul.  &quot;Bosacka&quot; 18 – górna płyta</p></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="lblue bold-big">21:00 &ndash; 3</td>
                                <td class="white"><p>BAŃSKA BYSTRICA&nbsp;&nbsp;&nbsp;Dw. Autobusowy, st. 6</p></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th width="100" class="lblue bold-big">23:55 &ndash; 3</th>
                                <th class="white">BUDAPESZT&nbsp;&nbsp;<strong>Dworzec Autobusowy &quot;Orange Ways&quot;</strong></th>
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