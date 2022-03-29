<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hostname="localhost";
        $username="root";
        $password="";
        $dbname="";
        
        $dbConnect=new mysqli($hostname,$username,$password);
        if($dbConnect){
            echo "Connection established successfully";
        }else{
            echo "Failed to connect db.". mysqli_connect_error();
        }
    ?>
</body>
</html>