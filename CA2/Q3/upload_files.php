<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Files</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="user">Enter your name : </label>
        <input type="text" name="user">
        <br>
        <label for="file">Upload Aadhar Card : </label>
        <input type="file" name="file">
        <br>
        <label for="file1">Upload Pan Card : </label>
        <input type="file" name="file1">
        <br>
        <label for="file2">Upload 12th Marksheet : </label>
        <input type="file" name="file2">
        <br>
        <input type="submit" name="submit" value="Submit Form">
    </form>


    <?php
        //Function to check the file type i.e. png and pdf
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
            print_r($_FILES);
            
            $type = isType("file","file1","file2"); //calling type checker function

            if($type){

                $path = $_POST["user"]."/Applications/XAMPP/xamppfiles/htdocs/Php/XYZ/";

                //creating the directory | username/documents/
                if(!is_dir($path)){
                    mkdir($path,true);
                }

                //uploading the files in the desired directory
                move_uploaded_file($_FILES['file']['tmp_name'], $path.$_FILES['file']['name']);
                move_uploaded_file($_FILES['file1']['tmp_name'], $path.$_FILES['file1']['name']);
                move_uploaded_file($_FILES['file2']['tmp_name'], $path.$_FILES['file2']['name']);
                echo "<br><h1>Files Uploaded Successfully</h1>";
            }
            else{
                echo "<br><h1>Please upload a valid file</h1>";
            }
            
        }
        //clean the previous data
        // $_POST = array();
    ?>

</body>
</html>  