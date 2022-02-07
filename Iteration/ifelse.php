
<?php
// odd or even using if else 
    
    // $a=57;
    // if ($a%2==0){
    //    echo "Even Number :)";
    // }else{
    //     echo "Odd Number :)";
    // }

// if-else-if
    $a=32;
    if($a>90){
        echo "Grade A+";
    }else if($a<=90 && $a>80){
         echo "Grade A";
    }else if($a<=80 && $a>70){
         echo "Grade B+";
    }else if($a<=70 && $a>60){
         echo "Grade B";
    }else if($a<=60 && $a>50){
         echo "Grade C";
    }else if($a<=50 && $a>40){
         echo "Grade D";
    }else if($a<=40 && $a>33){
         echo "Grade E";
    }else{
        echo "Fail";
    }
?>

<!-- nested if else -->
<!-- 
    if(condition){
        
        if(condition){         
        
        }else{
        
        }
    
    }else{ 
              
    }
-->