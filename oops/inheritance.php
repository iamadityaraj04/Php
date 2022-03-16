<?php
    class marks{
        public $phy;
        public $che;
        public $math;
        function __construct($a,$b,$c)
        {
            $this->phy=$a;
            $this->che=$b;
            $this->math=$c;
        }
    }
    class total extends marks{
        public $total;
        function total(){
            $total=$this->phy+$this->che+$this->math;
            echo $total;
        }
    }

    $obj1=new total(68,90,59);
    $obj1->total();
?>