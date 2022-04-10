<?php
    if($_POST){
        
        $lEmpId=$_REQUEST["login-empId"];
        $lPwd=$_REQUEST["login-pwd"];
        
        $connect=new mysqli('localhost','root','','PhpProject');
        $query="SELECT * from gvAdmin where empId='$lEmpId' and pwd='$lPwd'" ;
        $result=$connect->query($query);
        
        if(mysqli_num_rows($result) ==1){
            session_start();
            $_SESSION['gvAdmin']='true';
            sleep(2);
            header('location:adminHome.php');
        }else{
            echo '<script>alert("Wrong Employee Id or Password :(")</script>';
        }
    }
?>



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
            padding: 85px;
            font-family: Arial, Helvetica, sans-serif;
        }
        input{
            font-size: 18px;
        }
        #profile-img,#password-img{
            width: 20px;
            margin: 10px 10px;
        }
        .login-icon{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 18px;
        }
        .login-form{
            width: 300px;
            margin-left: 0px;
            margin-bottom: 0px;
            height: 30px;
            border-left: none;
            border-right: none;
            border-top: none;
            background-color: #e2f2e4;
            border-bottom: 1px solid #292d4f ;
        }
    </style>
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="navLogo">
            <a href="home.php">
                <img src="images/logo.svg" alt="error" id="headerlogo" width="200px">
        </a>
        </div>
        <div class="navMenu" id="navMenu">
            <ul>
                <li><a href="register.php" id="loginBtn">REGISTER</a></li>
            </ul>
        </div>
    </nav>
    <div id="login-container">
        <div id="login-form">
            <div id="login-form-login">
                <center>
                    <div id="login-form-input">
                        <form method="POST">
                            <h1 style="color: #292d4f;">Login</h1>
                            <div class="login-icon">
                                <img src="images/profile.svg" alt="" id="profile-img"> <input type="number" name="login-empId" class="login-form" placeholder="Employee Id"><br><br>
                            </div>
                            <div class="login-icon">
                                <img src="images/password.svg" alt="" id="password-img"> <input type="password" name="login-pwd" class="login-form" placeholder="Password"> <br>
                            </div>
                            <input type="submit" value="Login" name="login-submit" id="login-form-btn">
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>
</body>
</html>