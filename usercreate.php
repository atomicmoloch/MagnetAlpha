<?php 
$idtrack = $blank = ''; 
$Username = '';


if(isset($_GET["Username"])) $Username = $_GET["Username"]; //gets the username
if(isset($_GET["idtrack"])) $idtrack = $_GET["idtrack"]; //gets the password


$pwords = file_get_contents('ADD_FILENAME_HERE');

$result= "3149099793" . $Username . "3149150356";

$isexist = strpos($pwords, $result);

if ($isexist === false) 
{
	$fq  = fopen("C:/Abyss Web Server/spofsevensix.hdoc", 'a+');
	fwrite($fq, "3149099793" . $Username . "3149150356" . $idtrack . "3149150356\n"); 
	fclose($fq);
	echo "New User Created Successfully<br><br>Click <a href=\"./index.html\">here</a> to continue";
}
else
{
	echo "Error: The username you selected is already in use";
}

?>