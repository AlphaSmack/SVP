<?php
if(isset($_POST['submit'])){
    $username = ($_POST["username"]);
    $password = ($_POST["password"]);
}else{
    echo "Logi sisse!";
}

if ($_POST["username"] == NULL){
    echo "Sisesta kasutaja";
}

if ($_POST["password"] == NULL){
    echo "Sisesta parool";
}

if($_POST["username"]!=NULL and $_POST["password"]!=NULL){
    echo "Oled sisse logitud {$username} kasutajaga";
}
;
