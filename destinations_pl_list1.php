<?php include("weather.php"); ?>
<?php require("includes/timetables/main.php") ?>
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
                    	<?php include("includes/contacts_pl.html"); ?>
                    </div>
                </div>
                <div id="right">
                	<div id="crumb">
                    	<h1><strong>BUŁGARIA</strong><img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" /><strong>POLSKA</strong></h1>
                        <h2 class="fl"><strong>SOFIA</strong><img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" /><strong>WARSZAWA,  ŁÓDŹ, CZĘSTOCHOWA, KATOWICE, KRAKÓW </strong></h2>
                        <h3 class="fr"></h3>
                    </div>
                    <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                             <tr>
                                <th width="100" class="orange bold-big"><?php echo $sofia; ?> &ndash; 5</th>
                                <th class="white">SOFIA&nbsp;&nbsp;&nbsp;Dworzec Autobusowy &quot;Serdika&quot;</th>
                                <th>&nbsp;</th>
                            </tr>
                            <tr>
                                <td class="orange bold-big">&nbsp;</td>
                                <td class="lblue">Tranzyt: Serbia</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big"><?php echo $budapest; ?> &ndash; 6</td>
                                <td class="white">BUDAPESZT &nbsp;&nbsp;&nbsp;Dworzec Autobusowy &quot;Orange Ways&quot;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big"><?php echo $banskabistrica; ?> &ndash; 6</td>
                                <td class="white">BAŃSKA BYSTRICA&nbsp;&nbsp;&nbsp; Dw. Autobusowy, st. 6</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big"><?php echo $krakow; ?> &ndash; 6</td>
                                <td class="white">KRAKÓW&nbsp;&nbsp;&nbsp;RDA, ul.  &quot;Bosacka&quot; 18 – górna płyta</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big"><?php echo $katowice; ?> &ndash; 6</td>
                                <td class="white">KATOWICE&nbsp;&nbsp;&nbsp;Dworzec PKS, ul.  &quot;P. Skargi&quot;</td>
                                <td>&nbsp;</td>
                            </tr>
							
							<tr>
                                <td class="orange bold-big"><?php echo $czestochowa; ?> &ndash; 6</td>
                                <td class="white">CZĘSTOCHOWA&nbsp;&nbsp;&nbsp;Dworzec PKS, al.  &quot;Wolności&quot; 45, st. 13</td>
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td class="orange bold-big"><?php echo $ludz; ?> &ndash; 6</td>
                                <td class="white">ŁÓDŹ&nbsp;&nbsp;&nbsp;Dworzec PKP Łódź  Kaliska, ul. &quot;Karolewska&quot; 55, przed głównym wejściem – stanowisko  SINDBAD</td>
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td class="orange bold-big"><?php echo $warszawa; ?> &ndash; 6</td>
                                <td class="white">WARSZAWA&nbsp;&nbsp;&nbsp;Dworzec  &quot;Zachodni&quot; PKS, stan. &quot;Międzynarodowe&quot;</td>
                                <td>&nbsp;</td>
                            </tr>
							
							
                      </tbody>
                       
                  </table>
                	<div id="crumb2">
                   	  <h1>POLSKA<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />BUŁGARIA</h1>
                        <h2><strong>WARSZAWA,  ŁÓDŹ, CZĘSTOCHOWA, KATOWICE, KRAKÓW</strong><img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />SOFIA</h2>
                    </div>
                    <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td width="100"><span class="lblue bold-big">09:30 &ndash; 7</span></td>
                                <td width="410" class="white">WARSZAWA&nbsp;&nbsp;&nbsp;Dworzec  &quot;Zachodni&quot; PKS, stan. &quot;Międzynarodowe&quot;</td>
                                <td width="100">&nbsp;</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="lblue bold-big">11:30 &ndash; 7</span></td>
                                <td class="white">ŁÓDŹ&nbsp;&nbsp;&nbsp;Dworzec  PKP Łódź Kaliska, ul. &quot;Karolewska&quot; 55, przed głównym wejściem –  stanowisko SINDBAD</td>
                                <td class="lblue">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="lblue bold-big">13:45 &ndash; 7</td>
                                <td class="white">CZĘSTOCHOWA&nbsp;&nbsp;&nbsp;Dworzec  PKS, al. &quot;Wolności&quot; 45, st. 13</td>
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td class="lblue bold-big">15:00 &ndash; 7</td>
                                <td class="white">KATOWICE&nbsp;&nbsp;&nbsp;Dworzec  PKS, ul. &quot;P. Skargi&quot;</td>
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td class="lblue bold-big">16:45 &ndash; 7</td>
                                <td class="white">KRAKÓW&nbsp;&nbsp;&nbsp;RDA,  ul. &quot;Bosacka&quot; 18 – górna płyta</td>
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td class="lblue bold-big">21:00 &ndash; 7</td>
                                <td class="white">BAŃSKA BYSTRICA Dw. Autobusowy, st. 6</td>
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td class="lblue bold-big">23:55 &ndash; 7</td>
                                <td class="white">BUDAPESZT  Dworzec Autobusowy &quot;Orange Ways&quot;</td>
                                <td>&nbsp;</td>
                            </tr>
							
							
                             <tr>
                                <td class="lblue bold-big">&nbsp;</td>
                                <td class="white"><span class="aqua bold">Tranzyt: Serbia</span></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th class="lblue bold-big">14:30 &ndash; 1</th>
                                <th class="white">SOFIA&nbsp;&nbsp;&nbsp;Dworzec Autobusowy  &quot;Serdika&quot;</th>
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
                <div class="cl no-text"><!-- --></div>
            </div>
            <?php include("includes/footer_pl.html"); ?>
        </div>
    </body>
</html>