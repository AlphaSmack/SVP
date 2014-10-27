<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Valideerimine</title>
</head>
<body>

<?php

$isSubmitted = isset($_POST["submit"]);

if ($isSubmitted) {
    $username = $_POST["username"];
}

if (!isset($username) || $username == "") {
    $usernameMessage = '<div class="form-message">Nime väli ei vasta nõuetele</div>';
} else {
    $usernameMessage = '<div class="form-message">Täname korrektselt sisesatud nime eest!</div>';
}

if ($isSubmitted) {
    echo '<div class="form-message">' . $usernameMessage . '</div>';
}
?>

</body>
</html>