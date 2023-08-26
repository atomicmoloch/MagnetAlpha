<?php 

	if(isset($_COOKIE["pword"])) 
	{
		setcookie("pword", "Password", time() - 3600, "/");
		echo "<br>Logging out: Password cookie deleted successfully";
	}
	else {
		echo "<br><br>Error: Not actually logged in (password cookie not found)";
	}

	if(isset($_COOKIE["uname"])) 
	{
		setcookie("uname", "Admin", time() - 3600, "/");
		echo "<br>Logged out: Username cookie deleted successfully";
	}
	else {
		echo "<br><br>Error: Not actually logged in (username cookie not found)";
	}
echo "<br><br><a href=\"./index.html\" target=\"_top\">Click here to continue</a>";
echo "<br><br>It is imperitive that you click on the link and do not hit 'back' on your browser, as that will sign you back in to your account";

?>