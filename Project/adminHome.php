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
                    Name on certificate: <input type="text" name="c-name" required> <br><br>
                    Course Name: <input type="text" name="c-course-name" required> <br><br>
                    Duration(in Weeks): <input type="number" name="c-duration" > <br><br>
                    Certificate Number: <input type="number" name="c-number" required> <br><br>
                    Date of issue: <input type="date" name="c-doi" required> <br><br>
                    <input type="submit" value="Upload" name="details-submit" id="login-form-btn">
                </fieldset>
            </center>
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST)){
        $connect=new mysqli('localhost','root','','PhpProject');
        
        $cName=$_REQUEST["c-name"];
        $cCourseName=$_REQUEST["c-course-name"];
        $cDuration=$_REQUEST["c-duration"];
        $cNumber=$_REQUEST["c-number"];
        $cDoi=$_REQUEST["c-doi"];

        $query="SELECT * from certificateDetails where cNumber='$cNumber'" ;
        
        if(!preg_match ("/^[a-zA-z]*$/", $cName)){
            echo '<script>alert("Name only contains alphabet and space.")</script>';
        }else{
            if(mysqli_num_rows($connect->query($query)) ==0){
                $sql = "INSERT INTO certificateDetails(cNumber, cName, cDuration, cDoi,cCourseName)
                        VALUES ('$cNumber', '$cName', '$cDuration', '$cDoi', '$cCourseName')";  
                $insert=$connect->query($sql);
                if($insert==true) {
                    echo '<script>alert("Uploaded Sucessfully :)")</script>';
                } 
            }else {
                echo '<script>alert("Certificate with this id already exists!")</script>';
            }
        }
    }
?>