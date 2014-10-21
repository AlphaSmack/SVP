<?php
header("Location: components/new_page.php");

require "components/site-functions.php";
include "components/html-head.php";
$nimi = "Risto";

 echo hello($nimi);
?>