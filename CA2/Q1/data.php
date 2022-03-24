<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scorecard</title>
</head>
<body>
    <h1 style="color:coral; font-size:50px">Scorecard</h1>
<?php
    class marks{
        public $ca1;
        public $ca2;
        public $final;
        function __construct($a,$b,$c){
            $this->ca1=$a;
            $this->ca2=$b;
            $this->final=$c;
        }
    }
    class total extends marks{
        public $total;
        function total(){
            $total=$this->ca1+$this->ca2+$this->final;
            return $total;
        }
    }
    //to get marks of php
    $phpCa1Marks=$_POST['phpCa1Marks'];
    $phpCa2Marks=$_POST['phpCa2Marks'];
    $phpFinalMarks=$_POST['phpFinalMarks'];
    //to get marks of laravel
    $laravelCa1Marks=$_POST['laravelCa1Marks'];
    $laravelCa2Marks=$_POST['laravelCa2Marks'];
    $laravelFinalMarks=$_POST['laravelFinalMarks'];
    //object creation for marks calculation
    $obj1=new total($phpCa1Marks,$phpCa2Marks,$phpFinalMarks);
    $obj2=new total($laravelCa1Marks,$laravelCa2Marks,$laravelFinalMarks);
    $tot1=$obj1->total();
    $tot2=$obj2->total();
    echo "Total Marks in PHP: "."<b>".$tot1."</b>". " Out of <b>100</b>"."<br>"."<br>";
    echo "Total Marks in Laravel: "."<b>".$tot2."</b>". " Out of <b>100</b>"."<br>"."<br>";
    $percentage=(($tot1+$tot2)/200)*100;
    if($percentage>80){
        echo "Overall Marks Obtained: "."<b>". number_format($percentage, 2)."%"."</b>"."<br>";   
        echo "Remarks: Keep it up 👏";
    }else if($percentage<80 && $percentage>65){
        echo "Overall Marks Obtained: "."<b>". number_format($percentage, 2)."%"."</b>"."<br>";    
        echo "Remarks: Good! Try to improve :)";   
    }else if($percentage<65 && $percentage>33){
        echo "Overall Marks Obtained: "."<b>". number_format($percentage, 2)."%"."</b>"."<br>";   
        echo "Remarks: Needs to improve a lot :)";   
    }else{
        echo "Overall Marks Obtained: "."<b>". number_format($percentage, 2)."%"."</b>"."<br>";   
        echo "Remarks: Nothing is impossible, still you can try :(";   
    }
    ?>
</body>
</html>