<?php
//owned to Boyko Grozdanov 2010
function getWeatherRSS($weatherLink){
   
   if ($fp = fopen($weatherLink, 'r')) {
      $content = '';
        
      while ($line = fread($fp, 1024)) {
         $content .= $line;
      }
   }

   return $content;  
}

function processWeather($wurl){
    
    $wrss = getWeatherRSS($wurl);
    $temp  = '-';
    $tempu = '';
    $city  = '';
    if (strlen($wrss)>100){
        $spos = strpos($wrss,'yweather:units temperature="')+strlen('yweather:units temperature="');
        $epos = strpos($wrss,'"',$spos);
        if ($epos>$spos){
            $tempu = substr($wrss,$spos,$epos-$spos);
        } 

        $spos = strpos($wrss,'yweather:wind chill="')+strlen('yweather:wind chill="');
        $epos = strpos($wrss,'"',$spos);
        if ($epos>$spos){
            $temp += substr($wrss,$spos,$epos-$spos);
        } else {
            $temp = '-';
        }
        
        $spos = strpos($wrss,'yweather:location city="')+strlen('yweather:location city="');
        $epos = strpos($wrss,'"',$spos);
        if ($epos>$spos){
            $city = substr($wrss,$spos,$epos-$spos);
        } 

    }
	
    return $temp.' &deg;'.$tempu;
  
}
?>
