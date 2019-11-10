<?php

$name = ($_POST["name"]);
$email = ($_POST["email"]);
$major = htmlspecialchars($_POST["radio"]);
$comments = htmlspecialchars($_POST["comments"]);
$places = $_POST["places"];

?>


<!DOCTYPE HTML>
<html>
<head>
   <title>Submission Results</title>
</head>
<body>

<h1>Submission Results</h1>
<p> Your name is: <?=$name ?></p>
<p> Your email is: <a href="mailto:<?=$email ?>"><?=$email ?></a></p>
<p> Your major is: <?=$major ?> </p>
<p> Your comments: <?=$comments ?> </p>

<ul>
<?
foreach ($places as $place)
{
	$place_clean = htmlspecialchars($place);
	echo "<li><p>$place_clean</p></li>";
}
?>		

</ul>

</body>
</html>