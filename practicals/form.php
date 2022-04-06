<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        fieldset{
            width: 50%;
            margin-top: 50px;
        }
        #submit{
            width: 100px;
            font-size: 30px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Form -->
    <form action="form.php" method="POST">
        <center>
            <Fieldset>
                <legend>Fill Details</legend>
                <label>Name </label><input type="text" name="name"><br><br>
                <label>Age </label><input type="number" name="age"><br><br>
                <label>Gender </label><input type="text" name="gender"><br><br>
                <label>Location </label><input type="text" name="location"><br><br>
                <label>Salary </label><input type="number" name="salary"><br><br>
                <input type="submit" name="submit" id="submit">
            </Fieldset>
        </center>
    </form>
</body>
</html>

<?php
    if(isset($_REQUEST['submit'])){
        //getting data
        $name=$_REQUEST["name"];
        $age=$_REQUEST["age"];
        $gender=$_REQUEST["gender"];
        $location=$_REQUEST["location"];
        $salary=$_REQUEST["salary"];
        
        //setCookie
        setcookie("name","$name", time()+300,"/","",0);
        setcookie("age","$age", time()+300,"/","",0);
        setcookie("gender","$gender", time()+300,"/","",0);
        setcookie("location","$location", time()+300,"/","",0);
        setcookie("salary","$salary", time()+300,"/","",0);
        echo "Cookies are set.<br>";
        
        //setSession
        $_SESSION["name"] = "$name";
        $_SESSION["age"] = "$age";
        $_SESSION["gender"] = "$gender";
        $_SESSION["location"] = "$location";
        $_SESSION["salary"] = "$salary";
        echo "Sessions are set.<br>";

        
        //Databse
        $connect=new mysqli('localhost','root','','PHPDB');
        if($connect){
            echo "Database connection established successfully. <br>";
        }else{
            echo "Failed to connect db. <br>";
        }
        
        //Table Creation
        // $createTable="CREATE TABLE DETAILS(NAME VARCHAR(30),
        //                                     AGE INT(3),
        //                                     GENDER VARCHAR(20), 
        //                                     LOCATION VARCHAR(20), 
        //                                     SALARY INT(10)
        //                                     )";
        // $query=$connect->query($createTable);
        // if($query){
        //     echo "Table Created";
        // }else{
        //     echo "Failed to create table";
        // }

        //inserting data in table
        $sql = "INSERT INTO DETAILS(name, age, gender, location, salary)
                fVALUES ('$name', '$age', '$gender', '$location', '$salary')";
        if($connect->query($sql)===true) {
        echo "New record inserted successfully";
        } else {
        echo "Failed to insert data.";
        }
    }

?>
