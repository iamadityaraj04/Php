<?php
    $connect=new mysqli('localhost','root','','PhpProject');
    
    if(isset($_REQUEST['register-submit'])){
        
        $rName=$_REQUEST["register-name"];
        $rEmail=$_REQUEST["register-email"];
        $rEmpId=$_REQUEST["register-empId"];
        $rPwd=$_REQUEST["register-pwd"];
        
        $query="SELECT empId from gvAdmin where empId='$rEmpId' or email='$rEmail'" ;
        if(mysqli_num_rows($connect->query($query)) ==1){
            echo '<script>alert("Accont with this email/employee Id already exists. Please login!")</script>';
        }else {
            $sql = "INSERT INTO gvAdmin(name, email, empId, pwd)
                    VALUES ('$rName', '$rEmail', '$rEmpId', '$rPwd')";  
            $insert=$connect->query($sql);
            if($insert==true) {
                echo '<script>alert("Registered Sucessfully. You can login now.")</script>';
            } 
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                            <input type="text" name="register-name" class="login-form" placeholder="Name" required><br><br>
                            <input type="email" name="register-email" class="login-form" placeholder="Email" required><br><br>
                            <input type="number" name="register-empId" class="login-form" placeholder="Employee Id" required><br><br>
                            <input type="password" id="pwd" name="register-pwd" class="login-form" placeholder="Password" required> <br>
                            <input type="text" id="cpwd" class="login-form" placeholder="Confirm Password" required> <br>
                            <div id="err"></div>
                            <input type="submit" value="Register" name="register-submit" id="login-form-btn">
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#cpwd').keyup(function(){
                var pwd=$('#pwd').val();
                var cpwd=$('#cpwd').val();
                if(cpwd!=pwd){
                    $('#err').html('*Password do not match.');
                    $('#err').css('color', 'red');
                    return false;
                }else{
                    $('#err').html('');
                    return false;
                }
            });
        });
    </script>
</body>
</html>

