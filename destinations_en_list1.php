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
            	<h1 id="logo"><a href="home_en.php" class="no-text" title="Touring.bg">TOURING</a></h1>
                <div id="head-right">
                	<?php require("includes/langs_bg.html"); ?>
                    <div class="cl no-text"><!-- --></div>
                   <?php require("includes/menu-top/en_destinations.html"); ?>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <div id="content">
            	<div id="left">
                	<?php require("includes/readmore_wiki_en.html"); ?>
                	<div id="buylink" class="box"><h1 style="background: url('css/images/left-weather-head.png') repeat scroll 0 0 transparent;">E-Tickets:</h1><a style="width: 200px; margin: 5px auto; display: block;" href="https://eshop.amsbus.cz/tourbg/koupitjizdenku/"><img style="width: 100%;" alt="http://img.artlebedev.ru/everything/gosloto/video/process/gosloto-video-process-click.gif" src="http://img.artlebedev.ru/everything/gosloto/video/process/gosloto-video-process-click.gif"></a></div><div id="weather" class="box">
                    	<h1>Notification:</h1>
                        <p style="padding:10px 20px 0;"><strong>Dear customers,</strong></p>
                        <p style="padding:10px 20px 0;"><strong> You can book or buy a ticket through E-Pay and Easy Pay.</strong></p>
                        <p style="padding:10px 20px 0;"><strong> For more information, please contact us by phones, which are announced in &quot;Contacts&quot; section.</strong></p>
                    </div>
                    <div id="left-contacts">
                    	<p>Address: <b>SOFIA 1202</b></p>
                        <p><b>„Maria Louisa” blvd. 102</b></p>
                        <p><b>Bus station "Serdika", office 69</b></p>
                        <p>Telephone: <b>+359 2 980 68 62</b></p>
                        <p>Mobile: <b>+359 89 449 94 97</b></p>
                        <p>Telephone/Fax: <b>+359 2 981 50 37</b></p>
             <p>e-mail: <a href="mailto:touringbus@touring.bg">touringbus@touring.bg</a></p>
                        <p>e-mail: <a href="mailto:tourbusbg@abv.bg">tourbusbg@abv.bg</a></p>
                    </div>
                </div>
                <div id="right">
                	<div id="crumb">
                    	<h1>BULGARIA<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />POLAND</h1>
                        <h2 class="fl">SOFIA<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />KRAKOW, KATOWICE, CZESTOCHOWA, LODZ, WARSAW</h2>
                        <h3 class="fr"></h3>
                    </div>
                    <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                        <thead>
                             <tr>
                                <th width="100" class="orange"><?php echo $sofia; ?> &ndash; 5</th>
                                <th width="410" class="white">SOFIA&nbsp;&nbsp;&nbsp;Bus station "Serdika"</th>
                                <th width="100">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="aqua bold">Transit: Serbia</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big"><?php echo $budapest; ?> &ndash; 6</td>
                                <td class="white">BUDAPEST&nbsp;&nbsp;&nbsp;Bus station "Orange Ways"</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big"><?php echo $banskabistrica; ?> &ndash; 6</td>
                                <td class="white">BANSKA BYSTRICA&nbsp;&nbsp;&nbsp;Bus Station, sector 6</td>
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td class="orange bold-big"><?php echo $krakow; ?> &ndash; 6</td>
                                <td class="white">KRAKOW&nbsp;&nbsp;&nbsp;PKS Bus station, &quot;Bosacka&quot; str. 18 - upper platform</td>
                                <td>&nbsp;</td>
                            </tr>
                           <tr>
                                <td class="orange bold-big"><?php echo $katowice; ?> &ndash; 6</td>
                                <td class="grey"><span class="white">KATOWICE&nbsp;&nbsp;&nbsp;PKS Bus station, &quot;P. Skargi&quot; str.</span></td>  
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td class="orange bold-big"><?php echo $czestochowa; ?> &ndash; 6</td>
                                <td class="red"><span class="white">CZESTOCHOWA&nbsp;&nbsp;&nbsp;PKS Bus station, &quot;Wolności&quot; alley 45, sector 13</span></td>
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td class="orange bold-big"><?php echo $ludz; ?> &ndash; 6</td>
                                <td class="white">LODZ&nbsp;&nbsp;&nbsp;Railway Station Lodz Kaliska,  &quot;Karolewska&quot; str. 55, in front of the main entrance - sector SINDBAD</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="orange bold-big"><?php echo $warszawa; ?> &ndash; 6</td>
                                <td class="white">WARSAW&nbsp;&nbsp;&nbsp;Bus station &quot;Zahodni&quot;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                	<div id="crumb2">
                   	  <h1>POLAND<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />BULGARIA</h1>
                        <h2>WARSAW, LODZ, CZESTOCHOWA, KATOWICE, KRAKOW<img src="css/images/crumb-arrow.png" width="14" height="14" alt="arrow" />SOFIA</h2>
                    </div>
                    <table class="destinations" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="lblue bold-big">09:30 &ndash; 7</td>
                                <td class="white">WARSAW&nbsp;&nbsp;&nbsp;Bus station &quot;Zahodni&quot;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="lblue bold-big">11:30 &ndash; 7</td>
                                <td class="white">LODZ&nbsp;&nbsp;&nbsp;Railway Station Lodz Kaliska,  &quot;Karolewska&quot; str. 55, in front of the main entrance - sector SINDBAD</td>
                                <td>&nbsp;</td>
                            </tr>
							
							<tr>
                                <td class="lblue bold-big">13:45 &ndash; 7</td>
                                <td class="red"><span class="white">CZESTOCHOWA&nbsp;&nbsp;&nbsp;PKS Bus station, &quot;Wolności&quot; alley 45, sector 13</span></td>
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td class="lblue bold-big">15:00 &ndash; 7</td>
                                <td class="grey"><span class="white">KATOWICE&nbsp;&nbsp;&nbsp;PKS Bus station, &quot;P. Skargi&quot; str.</span></td>  
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td class="lblue bold-big">16:45 &ndash; 7</td>
                                <td class="white">KRAKOW&nbsp;&nbsp;&nbsp;PKS Bus station, &quot;Bosacka&quot; str. 18 - upper platform</td>
                                <td>&nbsp;</td>
                            </tr>
							 <tr>
                                <td class="lblue bold-big">21:00 &ndash; 7</td>
                                <td class="white">BANSKA BYSTRICA&nbsp;&nbsp;&nbsp;Bus Station, sector 6</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="lblue bold-big">23:55 &ndash; 7</td>
                                <td class="white">BUDAPEST&nbsp;&nbsp;&nbsp;Bus station &quot;Orange Ways&quot;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="lblue">&nbsp;</td>
                                <td class="aqua bold">Tranzit: Serbia</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th width="100" class="lblue">14:30 &ndash; 1</th>
                                <th width="410" class="white">SOFIA&nbsp;&nbsp;&nbsp;Bus station "Serdika"</th>
                                <th width="100">&nbsp;</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div id="days">
                   	  <div class="cell">1 &ndash; Monday</div>
                        <div class="cell">3 &ndash; Wednesday</div>
                        <div class="cell">5 &ndash; Friday</div>
                        <div class="cell">7 &ndash; Sunday</div>
                        <div class="cl no-text"><!-- --></div>
                    	<div class="cell">2 &ndash; Tuesday</div>
                        <div class="cell">4 &ndash; Thursday</div>
                        <div class="cell">6 &ndash; Saturday</div>
                        <div class="cl no-text"><!-- --></div>
                    </div>
                </div>
                <div class="cl no-text"><!-- --></div>
            </div>
            <?php include("includes/footer_en.html"); ?> 
        </div>
    </body>
</html>