<!DOCTYPE html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />

<LINK REL="ICON" TYPE="IMAGE/X-ICON" HREF="favicon.ico">
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
<link rel="shortcut icon" href="favicon.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

<META NAME="AUTHOR" CONTENT="THOMAS SCHILB">
<META NAME="PUBLISHER" CONTENT="THOMAS SCHILB">
<META NAME="COPYRIGHT" CONTENT="&COPY; 2023 UP-FILES.COM">
<META NAME="description" CONTENT="SHARE YOUR FILES">
<META NAME="keywords" CONTENT="UP, FILES, FILE, UPLOAD, FILE-UPLOAD"> 
<META NAME="GOOGLEBOT" CONTENT="ALL, INDEX, FOLLOW">
<META NAME="PAGERANK" CONTENT="10"> 
<META NAME="MSNBOT" CONTENT="ALL,INDEX,FOLLOW"> 
<META NAME="REVISIT" CONTENT="2 DAYS"> 
<META NAME="REVISIT-AFTER" CONTENT="2 DAYS"> 
<META NAME="ALEXA" CONTENT="100">

<!--

MIT License

Copyright (c) 2023 Thomas Schilb

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

thomas_schilb@outlook.com
www.thomasschilb.com

-->

<style>
input {
  background-color: #31C8F9; /* LightBlue */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 23px;
  font-family: 'Quicksand', sans-serif;
}
input:hover {
  background-color: #31C8F9; /* LightBlue */
  border: 1px; border-color: white;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 23px;
  font-family: 'Quicksand', sans-serif;
}
a {
	color: #C0C0C0;
}
a:visited {
	color: #C0C0C0;
}
a:active {
	color: #C0C0C0;
}
a:hover {
	color: #31C8F9;
}
</style>

<?php

include 'c/class.ncrypt.php'; // un-comment this if needed

$ncrypt = new since8\Ncrypt;

$ncrypt->set_secret_key( '^&-my-key-&^' );	// optional, but STRONGLY recommended
$ncrypt->set_secret_iv( '#@)-my-iv-#*$' );	// optional, but STRONGLY recommended
$ncrypt->set_cipher( 'AES-256-CBC' );		// optional

// Get UFID variable if it's given
$UFID=(ISSET($_GET['uf_key']) ? $_GET['uf_key'] : '');
IF ($UFID == "") {
					include('header.html');
					include('form.html');
					include('footer.php');
}
ELSEIF ($UFID === true) {}
ELSE {
		include('header.html');
		#echo $UFID;
		// Decrypt an encrypted UFID to it's original $fileName/string
		$fileName_decrypted = $ncrypt->decrypt( $UFID ); // output: $fileName
		#echo $fileName_decrypted;
		$dl = "<a href='./d/".$fileName_decrypted."'>".$fileName_decrypted."</a>";
		echo "<center><br><br>GET IT NOW!<br><br>DOWNLOAD: ".$dl."<br><br><br></center>";
		include('footer.php');
		
	}
	

?>

<html>



<body style="color: #C0C0C0; margin: 0; background-color: #000000">

</body>
</html>
</head>