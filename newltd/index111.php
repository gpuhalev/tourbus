<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    
    <style>
* {
  padding: 0;
  margin: 0;
}
.fit {
  max-width: 100%;
  max-height: 100%;
}
.center {
  display: block;
  margin: auto;
}
</style>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" language="JavaScript">
function set_body_height()
{
    var wh = $(window).height();
    $('body').attr('style', 'height:' + wh + 'px;');
}
$(document).ready(function() {
    set_body_height();
    $(window).bind('resize', function() { set_body_height(); });
});
</script>


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Touring.bg</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.pngFix.js"></script>
    </head>
    <body id="home">
		<div id="shell">
        	<div id="langs-home">
            	<a href="home_bg.php" class="bg">BG</a>
            	<a href="home_pl.php" class="pl">PL</a>
            	<a href="home_cz_under.php" class="cz">CZ</a>
            	<a href="home_en.php" class="en">EN</a>
            </div>
        </div>
        
        <a href="newltd/index.php"><img id="the_pic" class="center fit" src="pictures/logo-tour-bus-redp.jpg" ></a>
    </body>
</html>