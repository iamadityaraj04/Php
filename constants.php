<!-- in php costant can be defined in two ways -->
<?php
    // //using cont keyword
    // const name="Aditya Raj";
    // echo name."<br>";

    // using define() function
    //define(name, value, boolean(for case sensitive))
    define("AGE","20 Years",true);//by default it is false
    echo AGE."<br>";
    echo age."<br>";

    //it is a way to print the value of constants using constant() function
    echo constant("AGE"); 

?>