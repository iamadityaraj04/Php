<?php
    if(isset($_REQUEST['qSubmit'])){
        $connect=new mysqli('localhost','root','','PhpProject');
        $qName=$_REQUEST['qName'];
        $qEmail=$_REQUEST['qEmail'];
        $qMsg=$_REQUEST['qMsg'];
        if($qName==''){
            echo '<script>alert("Name cannot be empty.")</script>';
        }else if(!preg_match ("/^[a-zA-z]*$/", $qName)){
            echo '<script>alert("Name only contains alphabet and space.")</script>';

        }else{
            if($qEmail!=''||$qMsg!=''|| $qName!=''){
                $sql = "INSERT INTO query(qname, qemail, qmsg)
                        VALUES ('$qName', '$qEmail', '$qMsg')";  
                $insert=$connect->query($sql);
                if($insert==true) {
                    echo '<script>alert("Thank You for writing us. :)")</script>';
                }
            }         
        }
    } 
    if(isset($_REQUEST['cfetch'])){
        $connect=new mysqli('localhost','root','','PhpProject');
        
        $cnumber=$_REQUEST['cnumber'];

        $fetch="SELECT * from certificateDetails where cNumber='$cnumber'";
        $result=$connect->query($fetch);
        
        if(mysqli_num_rows($result) ==1){
           setcookie("cnumber","$cnumber", time()+3000,"/","",0);
            sleep(1);
            header('location:result.php');
        }else{
            echo '<script>alert("Certificate Number Is Not Valid!")</script>';
        }

        
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Verified | Homepage</title>
    <link rel="shortcut icon" href="images/logo1.svg">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
    <div class="container" id="container">
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
                    <li><a href="#subContainer1">HOME</a></li>
                    <li><a href="#subContainer2">VERIFY CERTIFICATE</a></li>
                    <li><a href="#subContainer3">ABOUT</a></li>
                    <li><a href="#subContainer4">CONTACT</a></li>
                    <li><a href="login.php" id="loginBtn">LOGIN / REGISTER</a></li>
                </ul>

            </div>
        </nav>
        <!-- subcontainer 1 -->
        <div id="subContainer1">
            <div id="background-img">

            </div>
            <div class="homepage-text">
                Hello! <span class="wave">👋</span>
                <div>
                    Don’t trust, <span class="typing"></span>    
                </div>
            </div>
        </div>
        <!-- subcontainer 2 -->
        <div id="subContainer2">
            <div id="verify-certificate">
                <div id="verify-certificate-1">
                    <img src="images/Group 12.png" alt=""   >
                </div>
                <div id="verify-certificate-2">
                    <div id="verify-certificate-bg">
                        <div id="verify-certificate-form">
                            <div>  
                                <p id="verify-certificate-title">Verify Your Certificate</p>
                            </div>
                            <div>
                                <form action="home.php" method="POST">
                                    <input type="number" id="verify-certificate-txtfield" placeholder="Enter Certificate Number" name="cnumber" required >
                                    <div>
                                        <button type="submit" name="cfetch" id="verify-certificate-btn" ">Verify It</button>
                                    </div>    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- subcontainer 3 -->
        <div id="subContainer3">
            <div class="subContainer-heading">
                <p>How It Works</p>
            </div>
            <div id="how-it-works-steps">
                <div class="steps">
                    <div class="steps-h1">
                        <h1>1</h1>
                    </div>
                    <div class="steps-img">
                        <img src="images/steps-1-img.svg" alt="" >
                    </div>
                    <div class="steps-p">
                        <h5 >Certificate Uploaded By Organisation</h5>
                    </div>
                </div>
                <div class="steps">
                    <div class="steps-h1">
                        <h1>2</h1>
                    </div>
                    <div class="steps-img">
                        <img src="images/steps-2-img.svg" alt="" >
                    </div>
                    <div class="steps-p">
                        <h5 >Request Verification By Entering Certificate Number</h5>
                    </div>
                </div>
                <div class="steps">
                    <div class="steps-h1">
                        <h1>3</h1>
                    </div>
                    <div class="steps-img">
                        <img src="images/steps-3-img.svg" alt="" >
                    </div>
                    <div class="steps-p">
                        <h5 >Get Your Verified Certificate</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- subcontainer 4  -->
        <div id="subContainer4">
            <div class="subContainer-heading">
                <p>Contact Us</p>
            </div>
            <div id="contact-us">
                <div id="contact-us-msg">
                    <div id="contact-us-msg-form">
                        <p>Send Message Here</p>
                        <form action="home.php" method="POST">
                            <input type="text" class="contact-us-form-textfield" placeholder="Name" name="qName" required><br>
                            <input type="email" class="contact-us-form-textfield" placeholder="Email" name="qEmail" required><br>
                            <textarea cols="30" rows="3" placeholder="Message" class="contact-us-form-textfield" name="qMsg" required></textarea>
                            <button id="contact-us-btn" type="submit" name="qSubmit">Send</button>
                        </form>
                    </div>
                </div>
                <div id="contact-us-img">
                    <img src="images/contact.jpg" alt="" width="100%" height="350px">
                </div>
            </div>
        </div>
        <!-- --------------footer-------------- -->
        <div class="footer" id="footer">
            <h1 id="get-in-touch">GET IN TOUCH</h1>
            <center><img src="images/logo.svg" alt="error" id="footerlogo" width="200px"></center>
            <div class="footerMenu" id="footerMenu">
                <div class="footerContact" id="footerContact">
                    <div class="phone">
                        <div ><img src="images/phone.svg" alt="" width="20px" height="20px" id="phone-icon"></div>
                        <span><p><a href="tel:+91-1234567890">+91-1234567890</a></p></span>
                    </div>
                    <div class="mail">
                        <div ><img src="images/mail.svg" alt="" width="20px" height="20px" id="mail-icon"></div>
                        <span><p><a href="mailto:getverified@yahoo.in" target="_blank" >getverified@yahoo.in</a> </p></span>
                    </div>
                    <div class="address">
                        <div ><img src="images/map.svg" alt="" width="20px"  height="20px" id="map-icon"></div>
                        <span><p><a href="https://maps.google.com/?q=Mumbai, India" target="_blank">Mumbai, India</a></p></span>
                    </div>
                </div>
                <div class="footerNavMenu" id="footerNavMenu">
                    <a href="#subContainer1">HOME</a>
                    <a href="#subContainer2">VERIFY CERTIFICATE</a>
                    <a href="#subContainer3">ABOUT</a>
                    <a href="#subContainer4">CONTACT</a>
                    <a href="">HELP</a>
                </div>
                <div class="footerLinks" id="footerLinks">
                    <a href="" id="facebook">FACEBOOK</a>
                    <a href="" id="youtube">YOUTUBE</a>
                    <a href="" id="twitter">TWITTER</a>
                    <a href="" id="pinterest">PINTEREST</a>

                </div>
            </div>
            <center><p id="copyright">&copy; <span> Get Verified 2022</span></p></center>
        </div>
    </div>
    
    <script>
        var a=0;
        function menutoggle() {
            if(a==0){
                document.getElementById("navMenu").style.display="inline";
                a++;
            }
            else{
                document.getElementById("navMenu").style.display="none";
                a--;
            }
        }
        
        var typing = new Typed (".typing" ,{
        strings : ["just verify.", "check it now."],
        typeSpeed: 100,
        backSpeed:60,
        loop:true
    }); 

        var a=0;
        function menutoggle() {
            if(a==0){
                document.getElementById("navMenu").style.display="inline";
                a++;
            }
            else{
                document.getElementById("navMenu").style.display="none";
                a--;
            }
        }

        function returnHomepage() {
            document.getElementById("container").style.opacity="1";   
            document.getElementById("certificate-display").style.display="none";
            document.getElementById("container").style.display="block";
            
        }

        $(document).ready(function(){
            $("#subContainer1").fadeIn(3000);
        });
         
    </script>
</body>
</html>
