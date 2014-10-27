<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Valideerimine</title>
</head>
<body>

<?php
    require("validation.php");
?>

<form action="validation.php" method="post">
    Username:
    <input type="text" name="username">
    <br>
    <input type="submit" name="submit">
</form>

</body>
</html>