
<?php

    echo "Accesing global variable through 'global' keyword";
    echo"<br>";
    $x=10;
    function func1()
    {
        $y=29;
        //global keyword is used in php to use global variable inside funtion
        global $x,$sum;
        $sum =$x+$y;
    }
    func1();
    echo $sum;
    echo"<br>";
    echo"<br>";
    
    echo "Accesing global variable through GLOBALS array";
    echo"<br>";
    $a=3.5; 
    $b=5.8;
    $c;
    function func2()
    {
        //in php global variable are store in an array called $GLOBALS['V'], here V is name of variable as index
        $GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
    }
    func2();
    echo $c;
    
    ?>