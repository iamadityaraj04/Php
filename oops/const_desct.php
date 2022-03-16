<?php
    class addition{
        function __construct($x,$y)
        {
            $this->x=$x;
            $this->y=$y;
        }

        //destructor is automatically called at the end.
        function __destruct()
        {
            echo "Done :)";
        }
        function add(){
            echo $this->x+$this->y;
            echo "<br>";
        }
        function sub(){
            echo $this->x-$this->y;
            echo "<br>";
        }
        function multi(){
            echo $this->x*$this->y;
            echo "<br>";
        }
        function div(){
            echo $this->x/$this->y;
            echo "<br>";
        }
    }
    
    $obj1=new addition(30,20);
    
    $obj1->add();
    $obj1->sub();
    $obj1->multi();
    $obj1->div();
    
?>