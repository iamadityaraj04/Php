<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
    <style>
        #submit{
            background-color: white;
            width: 90px;
            height: 35px;
            font-size: 20px;
            border-radius: 5px;
            box-shadow: 1px 1px 3px grey;
            cursor: pointer;
        }
        #submit:hover{
            background-color: lightgrey;
        }
        #input{
            font-size: 20px;
            border-radius: 5px;
            box-shadow: 1px 1px 3px grey;
        }
        form{
            margin-top: 150px ;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <center>
            <label style="font-size: 20px;">Enter Your Age: </label>
            <input type="text" id="input" name="age"> <br><br>
            <input type="submit" name="Submit" id="submit">
        </center>
    </form>
</body>
</html>
<?php
     if(isset($_POST['Submit'])){
        $num= $_POST['age'];
        if (filter_var($num, FILTER_VALIDATE_INT)>26 && filter_var($num, FILTER_VALIDATE_INT)<56) {
            echo("Age is valid :)");
        }else {
            echo("Age is not valid :(");
        }
     }
?>