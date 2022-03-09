<?php
    $a=$_REQUEST["name"];
    $b=$_REQUEST["age"];
    $c=$_REQUEST["email"];

    setcookie("name","$a", time()+300,"/","",0);
    setcookie("age","$b", time()+300,"/","",0);
    setcookie("email","$c", time()+300,"/","",0);

    echo "Cookie is Set.";
?>
    <form action="fetchCookie.php">
        <input type="submit" value="Show Cookie">
    </form>