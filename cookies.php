<?php
    setcookie("fname","Aditya", time()+300,"/","",0);
    setcookie("lname","Raj", time()+300,"/","",0);
    setcookie("age","20", time()+300,"/","",0);
    
    // for deleting cookie
    setcookie("lname","Raj", time()-300,"/","",0);
    setcookie("age","20", time()-300,"/","",0);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting Cookies</title>
</head>
<body>
    <?php
        echo $_COOKIE["fname"];
        echo $_COOKIE["lname"];
        echo "<br>";
        echo $_COOKIE["age"];
    ?>
</body>
</html>