<?php
/*
MIT License

Copyright (c) 2024 thomasschilb-com

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
*/

$search_queryErr = "";
$search_query = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["search_query"])) { $search_queryErr = "Nothing to search for?"; } else { $search_query = test_input($_POST["search_query"]); }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="?search_query=" align="center">
    <div class="auto-style6">
		</span>
		<span class="auto-style9">
		<span class="auto-style12">
		<span class="title3"><br></span>
		</span>
		<font class="auto-style12">
		<span class="auto-style5">Simple MD5 Hash Generator 1.0</span><span class="title3"><br></span></font>
		<br class="auto-style14">
		</span>
		<input type="text" name="search_query" value="<?php echo $search_query;?>" class="auto-style8">
  	  <span class="auto-style13">
  <br class="auto-style5"><br class="auto-style5">
  	  </span>
  <button type="submit" name="submit" value="submit" class="auto-style10">Search</button>
	</div>
</form>
<?php
$y = $search_query;
echo("<center>MD5 Hash of Plaintext: " . md5($y) . "</center>\n");
?>