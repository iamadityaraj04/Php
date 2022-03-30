<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="PHPDB";

    //PROCEDURAL
    // $connect=mysqli_connect($hostname,$username,$password,$dbname);
    // if($connect){
    //     echo "Connection established successfully <br>";
    // }else{
    //     echo "Failed to connect db. <br>";
    // }

    //INFO TABLE
    // $createTable="CREATE TABLE info(fname VARCHAR(30),
    //                         lname VARCHAR(30),
    //                         email VARCHAR(20),
    //                         age INT(3), 
    //                         regno INT(10)
    //                         )";
    // $query=mysqli_query($connect,$createTable);
    
    //OBJECT ORIENTED
    // $connect=new mysqli($hostname,$username,$password,$dbname);
    // if($connect){
    //     echo "Connection established successfully <br>";
    // }else{
    //     echo "Failed to connect db. <br>";
    // }
    
    // ADDRESS TABLE
    // $createTable="CREATE TABLE address(house VARCHAR(30),
    //                                     locality VARCHAR(30),
    //                                     city VARCHAR(20),
    //                                     state VARCHAR(20), 
    //                                     pincode INT(10)
    //                                     )";
    // $query=$connect->query($createTable);
    

    $connect=new mysqli($hostname,$username,$password,$dbname);
    if($connect){
        echo "Connection established successfully <br>";
    }else{
        echo "Failed to connect db. <br>";
    }
    //EMPLOYEE TABLE
    $createTable="CREATE TABLE EMPLOYEE(UID INT(10),
                                        NAME VARCHAR(30),
                                        EMAILID VARCHAR(30),
                                        AGE INT(3),
                                        PLACE VARCHAR(20), 
                                        POSITION VARCHAR(20), 
                                        BASIC_SALARY INT(10),
                                        PAY_GRADE INT(10),
                                        PAYABLE_SALARY INT(10),
                                        SALARY_DEDUCTION INT(10)
                                        )";
    $query=$connect->query($createTable);
    if($query){
        echo "Table Created";
    }else{
        echo "Failed to create table";
    }
?>