<!DOCTYPE HTML>
<head>
    <title>
        Sending
    </title>
</head>
<body>
<pre>
<!--
    <?php print_r($_POST);
echo "Tere " . $_POST['username'] . "! Teie parool on " . $_POST['password'] . ".";

if (isset($_POST["username"])) {
    $username = $_POST["username"];
} else {
    echo "Please insert username";
}
if (isset($_POST["password"])) {
    $username = $_POST["password"];
} else {
    echo "Please insert password";
}
echo "<br>";
$username = isset($_POST["username"]) ? $_POST["username"] : "Puudub";
?>

-->


    <?php

    $a = "Tere {$_POST['username']} ! Teie parool on {$_POST['password']}.";
    $b = "Kasutajanimi või parool on puudu";
        $_POST = isset($_POST) ?  print_r($a) :  print_r($b);
    ?>
</pre>
</body>