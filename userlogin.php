<?php 
 
 $urlname = $postnumber = ''; //placeholders
	$no = 'no';
 
if(isset($_GET["urlname"])) $urlname = $_GET["urlname"]; //gets the post title
if(isset($_GET["postnumber"])) $postnumber = $_GET["postnumber"]; //gets the post title

	echo "<center><br>";
	
		if(isset($_COOKIE["uname"])) 
	{
		echo "Welcome, " . $_COOKIE["uname"] . " <a href=\"./logout.php\">(logout)</a><br>";
	}
	echo "<form id=\"input\" action=\"./post.php\" method=\"get\">";
	
	
	if(!isset($_COOKIE["uname"])) 
	{
	echo "<br>Username:<input type=\"text\" name=\"Username\">";
	}
	else{
		echo "<br><div style=\"display:none;\">Username:<input type=\"text\" value=\"";
		echo $_COOKIE["uname"];
	echo "\" readonly=\"readonly\" name=\"Username\"></div>";
	}
	
		if(!isset($_COOKIE["pword"])) 
	{
	echo "<br>Password:<input type=\"text\" name=\"idtrack\">";
	}
	else{
		echo "<br><div style=\"display:none;\">Password:<input type=\"text\" value=\"";
		echo $_COOKIE["pword"];
	echo "\" readonly=\"readonly\" name=\"idtrack\"></div>";
	}
	
	
	if (strcmp($postnumber, $no) == 0)
	{
	echo "<br>Post Title: <input type=\"text\" name=\"urlname\">";
	}
	
	echo "<br>Content:<textarea rows=\"5\" cols=\"30\" type=\"text\" name=\"Contents\"></textarea>";
	echo "<br><div style=\"display:none;\">Replying to post number:<input type=\"text\" value=\"";
	echo $postnumber;
	echo "\" readonly=\"readonly\" name=\"isreply\">";
	
	if (strcmp($postnumber, $no) == 0)
	{
	}
	else
	{
	echo "<br>Replying to Post Titled:<input type=\"text\" name=\"urlname\" readonly=\"readonly\" value=\"";
	echo $urlname;
	echo "\">";
	}
	
	echo "<br></div><input type=\"submit\" value=\"Submit\"></form></center>"; 



?>