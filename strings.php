<?php
    $str="Hi! I am Aditya.";
    echo "String: ".$str;
    echo"<br>";
    echo"<br>";
    
    //to find the length of string
    echo "Length of string is: ".strlen($str);
    echo"<br>";
    
    //to count the words
    echo "Word Count is: ".str_word_count($str);
    echo"<br>";
    
    //to reverse the string
    echo "Reverse of the given is: ".strrev($str);
    echo"<br>";
    
    //to find the position of the  string
    echo "Position of Aditya is: ".strpos($str,"Aditya");
    echo"<br>";
    
    //to find the position of the  string
    echo "Replace Raj with Singh: ".str_replace("Raj",  "Singh","Hi! I am Aditya Raj.");
    echo"<br>";
?>