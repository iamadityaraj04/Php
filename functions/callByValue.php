<?php  
function adder($str2)  
{  
    $str2 .= 'Call By Value';  //concatanation
}  
$str = 'Hello ';  
adder($str);  
echo $str;  //output: Hello, because change has done in str only not in str2
?>   