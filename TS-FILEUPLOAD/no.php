<?php
 //Liest die Ip aus!//
$ip = getenv ("REMOTE_ADDR");
//Überprüfen ob Ip.dat schon erstellt ist//
if(file_exists("./i/$ip.IP"))
{
    //Liest in den Array "lesaus" die datei ./NO.DAT ein//
    $lesaus = file("./no.dat");
    //Gibt den Array "lesaus" aus//
    //echo $lesaus[0].'<br><br><br>';// 
}
    //Ab hier beginnt die Verneinung - sprich 'die datei $ip.ip existiert nicht'//
else
{
    //Liest die datei ./NO.DAT wieder in einen Array aus// 
    $lesaus = file("./no.dat");
    //Der Ausgelsende Wert wird um 1 erhöt// 
    $lesaus[0]++; 
    //Die Datei ./NO.DAT wird im Modus r+ (Lesen und Schreiben/Datenzeiger Am Anfang) geöffnet//
    $datei = fopen("./no.dat","r+");
    //Der Variable $datenm wir der Ausgelsende [und um 1 erhöte] Wert zugeteilt//
    $datenm="$lesaus[0]"; 
    //Der Datenzeiger wird wieder an den Anfang zurückgesetzt//
    rewind($datei);
    //Der Wert der variable $datenm wird in die Datei geschrieben//
    fwrite($datei,$datenm);
    //Die Datei wird geschlossen//
    fclose($datei);
    //Der Wert der vorhin um 1 erhört wurden ist, wird ausgegeben//
    //echo $lesaus[0].'<br><br><br>';//
    //Die Datei $ip.ip wird im Modus 'w+' erstellt [ist nötig für die IP-Sperre]//
    $file = fopen("./i/$ip.IP","w+"); 
    //Der Variable $datenm wird der wert $ip zugewiesen//
    $datenm="$ip"; 
    //In die Datei wird die Variable $ip geschrieben//
    fwrite($file,$datenm);
    //Die Datei wird geschlossen//
    fclose($file);
}
?>  
