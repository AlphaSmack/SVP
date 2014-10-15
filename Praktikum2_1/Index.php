<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<title> Esimene leht </title>
</head>
<body>
<?php
$page_link= "./Home.php";
$name="Risto";
$lastname="Mikelsaar";
?>
<a href="<?php echo $page_link.'?name='.$name."&lastname=".$lastname; ?>">Teisele lehele</a>

</body>
</html>