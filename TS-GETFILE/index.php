<HTML>
<PRE>
<?php 
    // Initialize a file URL's content to the variable, to file
    $url = 'http://m2v.ru/?func=part&Part=4&/appz.xml.html'; $file_name = basename($url); echo "PARSE APPS-RELEASES: ";
    if (file_put_contents($file_name, file_get_contents($url))) { echo "OK<br>"; } else { echo "ERROR.<br>";} 
    $url = 'http://m2v.ru/?func=part&Part=3&/games.xml.html'; $file_name = basename($url); echo "PARSE GAMES-RELEASES: ";
    if (file_put_contents($file_name, file_get_contents($url))) { echo "OK<br>"; } else { echo "ERROR.<br>";} 
    $url = 'http://m2v.ru/?func=part&Part=8&/music.xml.html'; $file_name = basename($url); echo "PARSE MUSIC-RELEASES: ";
    if (file_put_contents($file_name, file_get_contents($url))) { echo "OK<br>"; } else { echo "ERROR.<br>";} 
?>
</PRE>
</HTML>