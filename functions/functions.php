<!-- Syntax -->
<!-- 
    function fnName(){

} 
-->
<?php
    function calSquare(){
       $a=22;
       $square=$a*$a;
       echo "Square is: ".$square;
    }
    calSquare();
    echo "<br>";
    echo "<br>";
    
    //funcitons with argument
    function intro($name, $place, $age){
        echo "I am ".$name.". I belogs to ".$place." and i am ".$age. " years old. <br>";
    }
    intro("Aditya Raj", "Dhanbad",20);
    intro("Shiva", "Patna",15);
    intro("Alok", "New Delhi",22);
    
?>