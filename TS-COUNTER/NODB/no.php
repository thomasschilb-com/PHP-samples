<?php

//
// TS-COUNTER V1.0
//
// DESCRIPTION: COUNTS PER IP, WITHOUT ANY DATABASE
// NOTICE: IF LINUX THEN CHMOD 777, ALL FILES AND DIRECTORIES!
//

$ip = getenv ("REMOTE_ADDR");

if(file_exists("./ips/$ip.ip"))
{
	$readout = file("./no.dat");
	echo"$readout[0]";
}

else
{
	$readout = file("./no.dat");
	$readout[0]++;
	$file = fopen("./no.dat","r+"); $datam="$readout[0]"; 
    rewind($file);
    fwrite($file,$datam);
    fclose($file);
    echo"$readout[0]";
    $file = fopen("./ips/$ip.ip","w+"); 
    $datam="$ip"; 
    fwrite($file,$datam);
    fclose($file);
}

?>  
