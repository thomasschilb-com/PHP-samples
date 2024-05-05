<html>
<!-- 
  __________  ___ _____________          __________  _________ _________
  \______   \/   |   \______   \         \______   \/   _____//   _____/
   |     ___/    ~    \     ___/  ______  |       _/\_____  \ \_____  \
   |    |   \    Y    /    |     /_____/  |    |   \/        \/        \
   |____|    \___|_  /|____|              |____|_  /_______  /_______  /
                   \/                            \/        \/        \/
  ______________________________________________________________________
 
  PHP-RSS                                                            1.0
  ______________________________________________________________________

MIT License

Copyright (c) 2024 Thomas Schilb

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

mailto:info@thomasschilb.com

-->
<?php

// TODO: NO DESTINATION FOLDER
//       READ URLS WITHOUT A FILE

    // maximum execution time in seconds
    set_time_limit (24 * 60 * 60);

    //if (!isset($_POST['submit'])) die();

    // folder to save downloaded files to. must end with slash
    $destination_folder = 'rss-feeds/';

    $url = 'https://m2v.ru/?act=rss&Part=8/rss.xml';
	
    $newfname = $destination_folder . basename($url);

    $file = fopen ($url, "rb");
    if ($file) {
      $newf = fopen ($newfname, "wb");

      if ($newf)
      while(!feof($file)) {
        fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
      }
    }

    if ($file) {
      fclose($file);
    }

    if ($newf) {
      fclose($newf);
    }
	//include('rss-feeds/rss.xml');
?>
<?php
//            if( $_SERVER['REQUEST_METHOD']=='POST' && !empty( $_POST['name'] ) ){

                $dom=new DOMDocument;
                //$dom->load( $_POST['name'] );
				$dom->load('rss-feeds/rss.xml');
                $xp=new DOMXPath( $dom );
                $col=$xp->query( '//channel/item' );

                if( $col->length > 0 ){
                    foreach( $col as $node ){
		//	printf( 
                //            '<a href="%s', 
                //            $xp->query('link',$node)->item(0)->textContent
                //        );
                        printf( 
                            '%s<br>', 
                            $xp->query('title',$node)->item(0)->textContent
                        );

                    }
                }
//            }
?>