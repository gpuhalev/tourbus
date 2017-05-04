<?php include("weather.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php require("includes/title.html"); ?> 
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
                	<?php require("includes/langs_bg.html"); ?>
                    <div class="cl no-text"><!-- --></div>
                    <?php require("includes/menu-top/pl_contacts.html"); ?>
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
                        <?php include("includes/contacts_pl.html"); ?>
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
                            E-mail:<a href="mailto:touringbuspl@abv.bg">touringbuspl@abv.bg</a><br />
                                Bank Millennium S.A.<br />
                                91116022020000000222361974
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
            <?php include("includes/footer_pl.html"); ?>
        </div>
    </body>
</html>