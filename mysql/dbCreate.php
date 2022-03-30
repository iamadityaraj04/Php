<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="";
    $connect=mysqli_connect($hostname,$username,$password);
    if($connect){
        echo "Connection established successfully <br>";
    }else{
        echo "Failed to connect db. <br>";
    }

    $createDB="CREATE DATABASE PHPDB";
    $query=mysqli_query($connect,$createDB);
    
    //object oriented method
    // $createDB="CREATE DATABASE First";
    // $query=$connect->query($createDB);
    
    if($query){
        echo "Database Created";
    }else{
        echo "Failed to create database";
    }
?>