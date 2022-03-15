<?php
    class addition{
        public $x=30;
        public $y=90;

        function add(){
            echo $this->x + $this->y;
        }
    }

    $obj1=new addition();
    $obj1->add();
?>