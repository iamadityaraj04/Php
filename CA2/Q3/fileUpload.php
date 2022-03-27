<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            width: 25%;
        }
    </style>
</head>
<body>
    <center>
    <fieldset>
        <legend>Upload Files</legend>
        <form action="" method="POST" enctype="multipart/form-data">
                    <label for="photo">Name : </label>
                    <input type="text" name="name">
                    <br><br>
                    <label for="photo">Photo : </label>
                    <input type="file" name="photo">
                    <br><br>
                    <label for="resume">Resume/CV : </label>
                    <input type="file" name="resume">
                    <br><br>
                    <input type="submit" name="submit" value="Submit Form">
            </form>
        </fieldset>
    </center>
    <?php
        //check's weather the file is in pdf or png
        function isType(...$filesName){
            foreach($filesName as $file){
                $check = false;
                if($_FILES[$file]['type'] == 'image/png' || $_FILES[$file]['type'] == 'application/pdf'){
                    $check = true;
                }
                if($check == false)
                    return $check;
            }          
            return true;
        }
        if(isset($_POST["submit"])){
            
            $type = isType("photo","resume"); 

            if($type){
                //makes directory to store the uploaded file
                $path = $_POST["name"]."/"."documents/";
                if(!is_dir($path)){
                    mkdir($path,0777,true);
                }
                move_uploaded_file($_FILES['photo']['tmp_name'], $path.$_FILES['photo']['name']);
                move_uploaded_file($_FILES['resume']['tmp_name'], $path.$_FILES['resume']['name']);
                echo "<br><h1>Uploaded Successfully :)</h1>";
            }
            else{
                echo "<br><h1>Upload in png or pdf file format.</h1>";
            }
        }
    ?>
</body>
</html>