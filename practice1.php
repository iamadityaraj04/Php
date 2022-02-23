<?php
    $arr1 = array("white","red","green","blue");
    $arr2 = array("yellow","pink");
    
    echo "Array1"."</br>";
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";
    
    echo "Array2"."</br>";
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";
    
    array_pop($arr1);
    $result=array_merge($arr1,$arr2);
    echo "Result"."</br>";
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    
    
    $arr3 = array("a","b","c","d");
    $arr4 = array("yellow","pink","green","blue");
    array_combine($arr3,$arr4);
    echo "<pre>";
    print_r( array_combine($arr3,$arr4));
    echo "</pre>";

    
?>