<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo1.svg">
    <title>Login Page</title>
    <style>
        form{
            padding: 20px;
            font-family: Arial, Helvetica, sans-serif;;
        }
        label{
            margin-top: 35px;
            font-size: 25px;
        }
        input{
            font-size: 18px;
        }
        #login-form-input{
            height: 600px;
        }
    </style>
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="navLogo">
            <a href="home.php">
                <img src="images/logo.svg" alt="error" id="headerlogo" width="200px">
        </a>
            <div id="menu-toggle" onclick="menutoggle()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="navMenu" id="navMenu">
            <ul>
                <li><a href="login.php" id="loginBtn">Login</a></li>
            </ul>
        </div>
    </nav>
    <div id="login-container">
        <div id="login-form">
            <div id="login-form-login">
                <center>
                    <div id="login-form-input">
                        <form action="register.php" method="POST">
                            <h1 style="color: #292d4f;">Register</h1>
                            <label for="">Name</label><input type="text" name="register-name" class="login-form"><br><br>
                            <label for="">Email</label><input type="text" name="register-email" class="login-form"><br><br>
                            <label for="">Employee Id</label><input type="text" name="register-empId" class="login-form"><br><br>
                            <label for="">Password</label><input type="password" name="register-pwd" class="login-form"> <br>
                            <label for="">Confirm Password</label><input type="text" name="cpwd" class="login-form"> <br>
                            <input type="submit" value="Register" name="register-submit" id="login-form-btn">
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="PHPDB";
    $connect=new mysqli('localhost','root','','PHPDB');
    
    
    
    if(isset($_REQUEST['register-submit'])){
        
        $rName=$_REQUEST["register-name"];
        $rEmail=$_REQUEST["register-email"];
        $rEmpId=$_REQUEST["register-empId"];
        $rPwd=$_REQUEST["register-pwd"];
        
        //storing data
        $sql = "INSERT INTO gvAdmin(name, email, empId, pwd)
                VALUES ('$rName', '$rEmail', '$rEmpId', '$rPwd')";
        if($connect->query($sql)===true) {
            echo '<script>alert("Registered Sucessfully :)")</script>';
        } else {
            echo '<script>alert("Failed to register :(")</script>';
        }
    }

?>