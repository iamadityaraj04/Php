<!-- 
    * in php we can pass n number of arguments in the function\
    * we use 3 dot(...) before argument.
-->

<?php
    function product(...$num){
        $product=1;
        foreach ($num as $n) {
           $product*=$n;
        }
        return $product;
    }
    echo product(4,5,7,3,4,8);
?>