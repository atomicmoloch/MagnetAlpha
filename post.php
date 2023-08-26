<?php 
$urlname = $isreply = $idtrack = $blank = ''; //placeholder variables
$Contents = $Username = ''; //moar placeholders

if(isset($_GET["urlname"])) $urlname = $_GET["urlname"]; //gets the post title
if(isset($_GET["Contents"])) $Contents = $_GET["Contents"]; //gets the post/reply message contents
if(isset($_GET["Username"])) $Username = $_GET["Username"]; //gets the username
if(isset($_GET["idtrack"])) $idtrack = $_GET["idtrack"]; //gets the password
if(isset($_GET["isreply"])) $isreply = $_GET["isreply"]; //gets if it's a reply or a post, and if a reply the post number to reply to

$pwords = file_get_contents('ADD_FILENAME_HERE');//gets the password file

$result = "3149099793" . $Username . "3149150356" . $idtrack . "3149150356";//don't ask

$isvalid = strpos($pwords, $result);//finds out if the password/username combo given is in the password file


$temp = "31491503563149150356"; //don't ask; it protects against a very obscure but potentially devestating
$attemptcheat = strpos($pwords, $temp); //bug in the user system
$tempt = "31490997933149099793";
$attemptcheat1 = strpos($pwords, $tempt);

if ($attemptcheat === false) 	
{
if ($attemptcheat1 === false)
{
	

	$textar = "</textarea>";
	$willbreak = strpos(strtolower($Contents), $textar); //keeps posts from ending the textarea and writing in raw html/embeding arbitrary code
	$textar = "</textarea";
	$willbreak2 = strpos(strtolower($Contents), $textar); //keeps posts from ending the textarea and writing in raw html/embeding arbitrary code
	$textar = "textarea";
	$willbreak3 = strpos(strtolower($Contents), $textar); //keeps posts from ending the textarea and writing in raw html/embeding arbitrary code
	
	
	
if (($willbreak === false) && ($willbreak2 === false) && ($willbreak3 === false)) 	
{
if (strcmp($idtrack, '') !== 0)
{
if ($isvalid === false) 
{
	echo "Invalid Username or Password. Double check; both are case-sensative";
}
else
{


$a = 0; //placeholder
$no = 'no';//to avoid errors


$Rsername = str_replace("<", "", $Username);//keeps people from embedding arbitrary code in their usernames
$Rsername = str_replace(">", "", $Rsername);//or rather, keeps that code from executing
$Rsername = str_replace("\\", "", $Rsername);
$Rsername = str_replace("/", "", $Rsername);
$Username = $Rsername;

$Rsername = str_replace("<", "", $urlname);//keeps people from embedding arbitrary code in their titles.
$Rsername = str_replace(">", "", $Rsername);//or rather, keeps that code from executing
$Rsername = str_replace("\\", "", $Rsername);
$Rsername = str_replace("/", "", $Rsername);
$urlname = $Rsername;

if (strcmp($isreply, $no) !== 0) { //if it's a reply
$a = $isreply; //post number = post to be replied to (isn't able to write to non-forum-post pages)
}
else { //if it's not a reply
for ($x = 0; $x <= 10000000; $x++) { //arbitrarily large number of loops
  $a = rand();//generates randomized post number. TODO: Add limits
  if (file_exists('./'.$a.'.html')) //if a post already exists with that number, discards number
  { 
  }
  else{
	  break; //if no post with that number exists, gets out of loop and uses number as valid filename
  }
  
}

}

if (strcmp($Username, $blank) !== 0) //proteccs against blank usernames
{
if (strcmp($Contents, $blank) !== 0) //attaccs against blank comments
{
    $fp  = fopen($a.".html", 'a+'); //opens file to write to
	
		if(!isset($_COOKIE["uname"])) 
	{
		setcookie("uname", $Username, time() + (86400 * 30), "/");
	}
	
			if(!isset($_COOKIE["pword"])) 
	{
		setcookie("pword", $idtrack, time() + (86400 * 30), "/");
	}
	
	if (strcmp($isreply, $no) == 0) //if making a new post (not a reply)
		{ 
	fwrite($fp, "<center><h1>"); //writes post, post title, and the form for replying to the newly-created post
    fwrite($fp, $urlname."</h1><br>\n"); //I put them on different lines so there isn't just one huge line
	fwrite($fp, $Username." says:<br>\n<textarea rows=\"7\" cols=\"40\" type=\"text\" name=\"op\" readonly=\"readonly\">"); 
	fwrite($fp, $Contents."</textarea>\n\n<br><br>"); 
	fwrite($fp, "<a href=\"index.html\">Home</a><br>"); 
	fwrite($fp, "<br><iframe height=\"250\" width=\"500\" src=\"./userlogin.php?urlname=" . $urlname . "&postnumber=" . $a . "\">");
	fwrite($fp, "</iframe></center>"); 
	
    fclose($fp); 
	
	

	date_default_timezone_set("America/Los_Angeles"); //writes link to post, username, and date to post list
	$fr  = fopen("posts.html", 'a+');  //TODO: Break up post list so it will work with large numbers of posts
	fwrite($fr, "\n<center><a href=\""); //TODO: Maybe make a search? Has to be automatic, I ain't maintaining it
	fwrite($fr, $a.".html\">");
	fwrite($fr, $urlname."</a>  ");
	fwrite($fr, date("Y/m/d"));
	fwrite($fr, " by ");
	fwrite($fr, $Username."<br></center>");
	fclose($fr);
	
	$fq  = fopen("activity.html", 'a+'); //Adds indication of new post to activity log as well as link
	fwrite($fq, "\n<center>NEW POST: <a href=\""); //TODO: Break it up so it won't get huge with a lot of posts
	fwrite($fq, $a.".html\">");
	fwrite($fq, $urlname."</a>  ");
	fwrite($fq, date("Y/m/d"));
	fwrite($fq, " ");
	fwrite($fq, date("h:i:sa"));
	fwrite($fq, "<br></center>");
	fclose($fq);
	echo "\n\n<br><br>Post successfully posted and link to post posted into list of posted posts. Click <a href=\"";
	echo $a;
	echo ".html\" target=\"_top\">here</a> to view the post or click <a href=\"index.html\" target=\"_top\">here</a> to go back to the main page<br>Please note that";
	echo " your browser may have cached the post page and you will have to reload to see new replies";
	//^^ alerts user
	
	
	}
	else //if reply, not new post
	{
		
	if (file_exists('./'.$a.'.html'))//checks if post exists
	{
	fwrite($fp, "<center>"); //adds reply and username to already posted post
	fwrite($fp, $Username." says (in reply):\n<br><textarea rows=\"5\" cols=\"30\" type=\"text\" name=\"rp\" readonly=\"readonly\">"); 
	fwrite($fp, $Contents."</textarea>\n\n<br><br></center>"); 
    fclose($fp);  		
	
	date_default_timezone_set("America/Los_Angeles"); //puts post activity and time on activity log
	$fq  = fopen("activity.html", 'a+'); //See above activity log TODO
	fwrite($fq, "\n<center>NEW REPLY: <a href=\""); 
	fwrite($fq, $a.".html\">");
	fwrite($fq, $urlname." (Reply)</a>  ");
	fwrite($fq, date("Y/m/d"));//date
	fwrite($fq, " ");
	fwrite($fq, date("h:i:sa"));//time
	fwrite($fq, "<br></center>");
	fclose($fq);
	
   	echo "\n\n<br><br>Comment successfully posted and link to post posted into list of posted posts. Click <a href=\"";
	echo $a;
	echo ".html\" target=\"_top\">here</a> to view the post again or click <a href=\"index.html\" target=\"_top\">here</a> to go back to the main page<br>Please note that";
	echo " your browser may have cached the post page and you will have to reload to see new replies";
	//^^ alerts user
	
	}
	else{
		echo "\n\n<br><br>Error: Post does not exist or has been deleted";
	}
	}
}
else{
	echo "<br><br>Error: Blank Message or Username";
}
}
else{
	echo "<br><br>Error: Blank Message or Username";
}

	

}
}
else{
	echo "<br><br>Error: Password cannot be blank";
}
}
else{
	echo "Please stop trying to embed code";
}


}
else{
	echo "<br><br>System in lockdown, username breach. Please contact the sysadmin at obdeck@aol.com immediately";
}

}
else {
	echo "<br><br>System in lockdown, username breach. Please contact the sysadmin at obdeck@aol.com immediately";
}

?>