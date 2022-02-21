<!--  Three type of arrays-->

<!-- 1. Indexed Array -->
<?php
$car1=array("BMW","Suzuki", "Toyota", "Ford");
for ($i=0; $i<4; $i++){ 
    echo "$car1[$i]"." ";
}
?>

<!-- 2. Assosiative Array -->
<?php
$car2=array("first"=>"BMW","second"=>"Suzuki", "third"=>"Toyota","fourth"=>"Ford");

echo "<pre>";
print_r($car2) ;//print_r displays information about a variable in a human-readable way
echo "</pre>";
echo "$car2[first] </br> $car2[third] </br> $car2[fourth]";

echo "<br/>";  
echo "<br/>";  

?>


<!-- 3. Multidimensional Array -->
<?php    
$emp = array  
(  
    array(1,"sonoo",400000),  
    array(2,"john",500000),  
    array(3,"rahul",300000)  
);  
echo $emp[1][2];
echo "<br/>";  
for ($row = 0; $row < 3; $row++) {  
  for ($col = 0; $col < 3; $col++) {  
    echo $emp[$row][$col]."  ";  
  }  
  echo "<br/>";  
}  
?>    