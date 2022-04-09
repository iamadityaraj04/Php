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
</body>
</html>
