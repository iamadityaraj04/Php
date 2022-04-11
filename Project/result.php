<?php
    $connect=new mysqli('localhost','root','','PhpProject');
    $cnumber=$_COOKIE["cnumber"];
    $fetch="SELECT * from certificateDetails where cNumber='$cnumber'";
    $result=$connect->query($fetch);
    $rows=mysqli_fetch_array($result);  
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo1.svg">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Certificate</title>
    <style>
        .result-container{
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        .sub-container{
            width: 64%;
            height: 590px;
            margin: 100px auto ;
            background: url(images/demo-certificate.svg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #certificate-title{
            margin-top: 90px;
            color:#292d4f ;
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
    </nav>
    <div class="result-container">
        <div class="sub-container">
            <div >
               <h1 class="result-container" id="certificate-title">CERTIFICATE</h1>
           </div><br>
            <div >
               <h2 class="result-container">Name: <?php echo $rows['cName'];?> <script></script></h1>
           </div>
            <div >
               <h2 class="result-container">Course Name: <?php echo $rows['cCourseName'];?> <script></script></h1>
           </div>
            <div >
               <h2 class="result-container">Duration(in weeks): <?php echo $rows['cDuration'];?> <script></script></h1>
           </div>
            <div >
               <h2 class="result-container">Certificate Number: <?php echo $rows['cNumber'];?> <script></script></h1>
           </div>
            <div >
               <h2 class="result-container">Date of issue: <?php echo date("d-m-Y", strtotime($rows['cDoi'])) ;?> <script></script></h1>
           </div>
        </div>

    </div>
</body>
</html>