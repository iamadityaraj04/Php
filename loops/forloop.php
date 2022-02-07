<?php
// 10-1 reverse using for loop
        // for($n=10; $n>0;$n--){
        //     echo $n."<br>";
        // }

    echo "<br>";
    echo "<br>";

    for($i=1; $i<=3; $i++){
        for($j=1; $j<=3; $j++){
            for($k=1; $k<=3; $k++){
                echo $i." ".$j." ".$k;
                echo "<br>";      
            }
            echo "<br>"; 
        }
        echo "<br>";
    }
?>
<!-- nested for loop -->
<!-- 
    for(initialization; condition; increment/decrement){
        for(initialization; condition; increment/decrement){
        
        }
    }
 -->