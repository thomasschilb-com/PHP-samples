<?php

$db_location = "localhost"; //Location of the database (usually "localhost")
$db_username = "root"; //Username for DB access
$db_passwort = ""; //Password for DB access
$db_name = "counter"; //Name of the database

@mysql_connect($db_location, $db_username, $db_passwort) or die ("OFFLINE<br />"); 
@mysql_select_db($db_name) or die ("DATABASE DOES NOT EXISTS<br />"); 

$ip = $_SERVER['REMOTE_ADDR'];

$test = mysql_query("SELECT * FROM counter WHERE ip='$ip'");

if(mysql_num_rows($test) != 1) {
 mysql_query("INSERT INTO counter SET ip='$ip'");
}

$count = mysql_num_rows(mysql_query("SELECT cid FROM counter"));

echo "count: " . $count . "</br>ip: " . $ip ."<br /><br>iplist:<br><br>";

$test2 = mysql_query("SELECT * FROM counter");
while ($row = mysql_fetch_array($test2)) {
$showip = $row['ip'];
echo "<a href='http://ip-lookup.net/?ip=".$showip."'>".$showip."</a><br>";
}

?>