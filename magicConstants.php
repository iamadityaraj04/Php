<!-- magic constants -->

<?php
    //these are predefined constants that start and ends with __(two underscore.) 
    // __LINE__ :- returns the current number line of the file
    echo "Current line is : ".__LINE__;
    echo "<br>";
    
    // __FILE__ :- returns the current file path
    echo "Current file path is : ".__FILE__;
    echo "<br>";
   
    // __DIR__ :- returns the current file path
    echo "Current file directory is : ".__DIR__;
    echo "<br>";
   
    // __FUNCTION__ :- returns the function name in which it is present and it will return blank if not present in any function
    function func()
    {
        # code...
        echo "Function name is : ".__FUNCTION__;
    }
    func();
    echo "<br>";
   
    // just this 
    // __CLASS__ :- returns the class in which it is present
   
   //this is the only magic constatnt that do not start or end with (__)
    //    It returns the fully qualified name of the ClassName.
    //  namespace must be the very first statement or after any declare call in the script, otherwise it will generate Fatal error.
    
    // namespace Technical_Portal;  
    // echo "<h3>Example for CLASSNAME::CLASS </h3>";  
    // class javatpoint {    
    // }  
    // echo javatpoint::class;    //ClassName::class   
?>

   
