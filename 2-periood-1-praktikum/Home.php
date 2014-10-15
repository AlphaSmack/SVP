<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<title> Teine leht </title>
</head>
<body>
<a href="Index.php">Esimesele lehele</a>
<?php echo $_GET; ?>
<br>
<?php print_r($_GET); ?>
<br>
<?php echo "<p>".$_GET["name"]."</p>"; ?>
<br>
<?php $username=$_GET["name"]; ?>
</body>
</html>