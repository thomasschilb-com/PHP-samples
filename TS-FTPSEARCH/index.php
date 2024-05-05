<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
<head>
<title>TS | FTP-SEARCH</title>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap')

body, html {
			overflow: hidden;
			padding: 25;
			margin: 0;
		}
#searchResultFrame {
			width: 250vw;
			height: 100vh;
			border: none;
			margin: none;
			padding: none;
		}
#searchBar {
	font-family: "Source Code Pro", monospace;
	font-size: 32px;
	background: #151515;
	border-bottom-color: #808080;
}
input::text{
  color: #0C0C0C;
}
.title {
	font-family: "Source Code Pro", monospace;
	font-size: 32px;
}
a {
	color: #232323;
	text-decoration: none;
}
a:visited {
	color: #232323;
}
a:active {
	color: #232323;
}
	
.title3 {
	font-size: 32px;
}
	
.title4 {
	color: #FF0000;
}
.title6 {
	text-align: center;
	color: #232323;
	font-size: 23px;
	font-family: "Source Code Pro", monospace;
}
font {
  font-family: "Source Code Pro", monospace;
  font-optical-sizing: auto;
  font-weight: 300;
  font-style: normal;
}	
.title7 {
	font-family: "Source Code Pro", monospace;
	font-size: 23px;
}
.title8 {
  font-family: "Source Code Pro", monospace;
  font-optical-sizing: auto;
  font-weight: 200;
  font-style: normal;
  font-size: 64px;
}
a:hover {
	color: #808080;
}
</style>
<base target="_self">
<meta content="ts, ftp, ftpsearch, google" name="keywords">
<meta content="FTP Indexer" name="description">
</head>
<body style="color: #151515; background-color: #151515">
<font>
	<center id="searchBar">
		<h1 class="title"><br class="title3"><span class="title4">
		<span class="title8">
		FTP-SEARCH</span><br class="title8">
		</span></h1>
		<form>
			<br class="title7">
			<input type="text" id="searchTextInput" class="title7"></input></span><br class="title3">
			<br class="title3"></span>
			<button id="searchButton" class="title7">Search</button>
			<br class="title7"><br class="title7">
		</form>
	</center>
	<script type="text/javascript">
		document.getElementById("searchButton").addEventListener("click", function(event){
			event.preventDefault();
			search();
		});
		function search(){
			searchText = document.getElementById("searchTextInput").value;
			console.log("Searching for " + searchText);
			url = "http://www.google.com/search?q="+searchText+" -inurl:(htm|html|php|pls|txt|zip|7z|rar|xz|tar|mp3|m4a|mpg|mp4) intitle:index.of \"last modified\"";
			var win = window.open(url, '_blank');
			if (win) {
			    //Browser has allowed it to be opened
			    win.focus();
			} else {
			    //Browser has blocked it
			    alert('Please allow popups for this website');
			}
		}
	</script>
	<p class="title6">FTPSEARCH-1.0.0.8<br><br>POWERED BY
	<a href="HTTPS://WWW.GOOGLE.COM">GOOGLE.COM</a></p>
</font>
</body>
</html>