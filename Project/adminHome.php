<?php
    session_start();
    //session is empty or not
    if(!$_SESSION['gvAdmin']){
        header('location: login.php');
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
    <title>HomePage|Admin</title>
    <style>
        #details-form{
            width: 50%;
            margin: 200px auto; 
        }
        form{
            font-family: Arial, Helvetica, sans-serif;
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
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div id="details-form">
        <form action="adminHome.php" method="POST">
            <center>
                <fieldset>
                    <legend>Certificate Details</legend>
                    Name on certificate: <input type="text" name="certi-name"> <br><br>
                    Course Name: <input type="text" name="certi-course-name"> <br><br>
                    Duration(in Weeks): <input type="number" name="certi-duration"> <br><br>
                    Certificate Number: <input type="number" name="certi-number"> <br><br>
                    Date of issue: <input type="date" name="certi-doi"> <br><br>
                    <input type="submit" name="details-submit" id="login-form-btn">
                </fieldset>
            </center>
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_REQUEST['details-submit'])){
        
        $certiName=$_REQUEST["certi-name"];
        $certiCourseName=$_REQUEST["certi-course-name"];
        $certiDuration=$_REQUEST["certi-duration"];
        $certiNumber=$_REQUEST["certi-number"];
        $certiDoi=$_REQUEST["certi-doi"];

        $connect=new mysqli('localhost','root','','PhpProject');
        $query="SELECT * from certificateDetails where id='$certiNumber'" ;
        
        if(mysqli_num_rows($connect->query($query)) ==0){
            $sql = "INSERT INTO certificateDetails(id, name, cname, cduration,cdoi)
                    VALUES ('$certiNumber', '$certiName', '$certiCourseName', '$certiDuraion', '$certiDoi')";  
            $insert=$connect->query($sql);
            if($insert==true) {
                echo '<script>alert("Uploaded Sucessfully :)")</script>';
            } 
        }else {
            echo '<script>alert("Certificate with this id already exists!")</script>';
        }
    }
?>