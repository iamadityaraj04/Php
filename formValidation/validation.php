<!-- 
    []-> pass the pattern
    \s-> space
    \d-> digit
    \w-> special characters
    {}-> define range for operation
    + -> apply rule to all
-->
    <?php
    $namePattern ="/^[a-zA-Z\s]+$/";
    $agePattern ="/^[0-9]+$/";
    $pwdPattern ="/^[0-9a-zA-z{@,#}]+$/";
    if(isset($_REQUEST['save'])){
        // if(preg_match($namePattern,$_REQUEST['name'])){
        //     echo "Name is as per pattern"."</br>";
        // }else{
        //     echo "Name is not as per pattern"."</br>";
        // }
        if(preg_match($pwdPattern,$_REQUEST['pwd'])){
            echo "Password is as per pattern :)"."</br>";
        }else{
            echo "Password is not as per pattern :("."</br>";
        }
        // if(preg_match($agePattern,$_REQUEST['age'])){
        //     echo "Age is as per pattern"."</br>";
        // }else{
        //     echo "Age is not as per pattern"."</br>";
        // }
        
        // if(strlen($_REQUEST['name'])>=3){
        //     echo "Name is valid :)"."</br>";
        // }else{
        //     echo "Name is not valid :("."</br>";
        // }
    }
    ?>
