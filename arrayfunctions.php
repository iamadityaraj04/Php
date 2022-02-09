<?php
    echo"*array_search()"."<br>";
    $a = array("a"=>"red","b"=>"green","c"=>"blue");
    echo array_search("red",$a);
    echo "<br>";
    echo "<br>";
   
    echo"*array_slice()"."<br>";
    print_r((array_slice($a,1,2)));
    echo "<br>";
    echo "<br>";
    
    echo"*array_merge()"."<br>";// if key is same it will overwrite and if key is different it will merge
    $b = array("e"=>"red","b"=>"green","c"=>"blue");
    $c = array("a"=>"red","b"=>"yellow","c"=>"blue");
    print_r((array_merge($b,$c)));
    echo "<br>";
    echo "<br>";
    
    echo"*array_column()"."<br>";
    $result=array(
        array("Name"=>"Shiva","CGPA"=>"9","Status"=>"PASS"),
        array("Name"=>"Shubham","CGPA"=>"3.2","Status"=>"FAIL"),
        array("Name"=>"Rohit","CGPA"=>"7.4","Status"=>"PASS")
    );
    $a=array_column($result,'Name');
    echo "<pre>";
    print_r($a);
    
    $b=array_column($result,'Status','Name');
    echo "<pre>";
    print_r($b);
?>