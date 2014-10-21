<?php
if(isset($_POST['submit'])){
    $username = ($_POST["username"]);
    $password = ($_POST["password"]);
}elseif{
    if (isset($_POST)["username"])
        echo "Password incorrect";
    }else{
        echo "Wrong username";
    }
}



?>
<!---
echo "Login sisse {$username} kontosse";