<?php
    $a=$_REQUEST["name"];
    $b=$_REQUEST["age"];

    setcookie("name","$a", time()+300,"/","",0);
    setcookie("age","$b", time()+300,"/","",0);
    
    echo $_COOKIE["name"];
    echo "<br>";
    echo $_COOKIE["age"];
?>