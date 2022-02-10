<?php
    function modify(&$num2){
        $num2=20;
    }
    $num=10;
    echo $num."<br>";
    modify($num);
    echo$num;//output:20 , because now num2 is also refering to the same object i.e num
?>