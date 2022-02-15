<!-- Array Operators: used to compare arrays -->
<?php
    $colors = array("a"=>"red","b"=>"green","c"=>"blue");
    $courses = array("x"=>"INT221","y"=>"INT220","z"=>"CSE423");
    
    $colors1 = array("x"=>"red","y"=>"green","z"=>"blue");
    $courses1 = array("x"=>"INT221","y"=>"INT220","z"=>"CSE423");
    echo "<pre>";
    print_r(array_merge($colors,$courses));
    echo "</pre>";
    
    var_dump($colors==$courses);
    echo"<br>";
    var_dump($colors1!=$courses1);
    echo"<br>";
    var_dump($colors1!==$courses1);
    echo"<br>";
    var_dump($colors1<>$courses1);
    
    echo"<br>";
    if($colors==$colors1){
        echo "Array colors and colors1 are equal";
    }
    else{
        echo "Array colors and colors1 are not equal";
    }
    
    echo"<br>";
    if($courses===$courses1){
        echo "Array courses and courses1 are identical";
    }
    else{
        echo "Array courses and courses1 are not identical";
    }

?>