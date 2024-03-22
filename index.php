<!DOCTYPE html>
<html lang="sk-SK">
<head>
        <meta charset="utf-8">
        <meta name="keywords" content="HTML, CSS">
        <meta name="description" content="Zaklady HTML a Css">
        <meta name="author" content="Domco na Lenovaku">
        <link rel="stylesheet" type"text/css" href="style.css">
        <title> databazova aplikacia</title>
</head>
<!-- =========telo html========== -->
<body>
<div class="obal">
<!-- <h1>Northwind DB</h1> -->
<header>
<a href="index.php?stranka=domov"><img src="images/logo.jpg" alt="logo-web"></a>
<h1> databazova aplikacia</h1>
</header>
<nav>
	<ul>

		<li><a href="index.php?stranka=domov">Domov</a></li>
		<li><a href="index.php?stranka=filter">Filter</a></li>
		<li><a href="index.php?stranka=zoznam">Zoznam</a></li>
		<li><a href="index.php?stranka=login">Prihlasenie</a></li>

	</ul>
</nav>
<article>
<?php
if (isset($_GET['stranka']))
        $stranka = $_GET['stranka'];
else
        $stranka = 'domov';

if (preg_match('/^[a-z0-9A-Z]+$/', $stranka))
{	
	if($stranka === 'login') {
        $vlozena = include( $stranka . '.php');
        if (!$vlozena)
                echo('Podstránka nenajdena');
	}else{
	 $vlozena = include('include/' . $stranka . '.php');
        if (!$vlozena)
                echo('Podstránka nenajdena');

	}
}
else
        echo('Neplatný parameter.');

?>

</article>
<footer>
(C)2024 Dominik Zatkalik 
</footer>



</div>
</body>
</html>

