<?php
//conect .php - pre spojenie s DB.

//Vytvorime premenne
$mysql_srv = "localhost";
$mysql_usr = "usr1000";
$mysql_pas = "123asdf456";
$mysql_db = "aplikacna_databaza";

// PHP Dotaz pre SQL
$mysqli = new mysqli($mysql_srv, $mysql_usr, $mysql_pas, $mysql_db);
// $mysqli = starsie mysql_connect($mysql_srv, $mysql_usr, $mysql_pas, $mysql_db);


//formulacia dotazu ktorty bude mat iba true alebo false
$result = $mysqli->query("SET NAMES 'utf8'");
// starsie mysqli_set_charset($mysqli,"utf8");

echo "<span class=\"\">";
if(!$result) 
	die('Nastala chyba spojenia'.mysqli_error());
//else 
//	echo "Komunikacia je OK.";
echo "</span>";
?>

