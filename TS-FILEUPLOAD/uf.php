<?php

/*

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

*/

$target_dir = "d/"; // data of file uploads
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

include 'c/class.ncrypt.php'; // un-comment this if needed

$ncrypt = new since8\Ncrypt;

$ncrypt->set_secret_key( '^&-my-key-&^' );	// optional, but STRONGLY recommended
$ncrypt->set_secret_iv( '#@)-my-iv-#*$' );	// optional, but STRONGLY recommended
$ncrypt->set_cipher( 'AES-256-CBC' );		// optional


// Check if file already exists
if (file_exists($target_file)) {
  include('header.html');
  echo "<center><br><br>SORRY! FILE ALREADY EXISTS.<br><br><a href='./'>< GO BACK</a><br><br><br></center>";
  include('footer.php');
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	$fileName = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
	$Size = htmlspecialchars( basename( $_FILES["fileToUpload"]["size"]));
	$fileSize = round($Size / 1024 / 1024,2) . ' MB';
	$Name = preg_replace('/\.[^.]+$/','',$fileName);
	
	// encrypt a filename/string
	$fileName_encrypted = $ncrypt->encrypt( $fileName ); // output: QmNEQWMrVHpHdFErL0VHTXdmUGJoZz09

    // output upload complete, encrypted link	
    include('header.html');echo '<font size="32px">';
    echo "<center><br><br>CONGRATULATIONS!</font><br><br>".$Name."<br>(".$fileSize.")<br><br>HAS BEEN UPLOADED SUCCESSFULLY.<br><br>YOUR LINK: <a href='./?uf_key=".$fileName_encrypted."'>HERE</a><br><br><br></center>";
	include('footer.php');
	
	// output upload failed	
  } else {
	include('header.html');
    echo "<center><br><br>SOMETHING WENT WRONG!<br><br>THERE WAS AN ERROR UPLOADING YOUR FILE.<br><br><br></center>";
	include('footer.php');
  }
}
?>