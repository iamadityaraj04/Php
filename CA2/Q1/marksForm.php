<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
    <style>
        fieldset{
            width: 300px;
            padding: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Enter Marks</h1>
    <form action="data.php" method="POST">
        <fieldset>
            <legend>PHP</legend>
            <label>CA1 (Out of 30)</label> <input type="number" name="phpCa1Marks"><br><br>
            <label>CA2 (Out of 30)</label> <input type="number" name="phpCa2Marks"><br><br>
            <label>Final (Out of 50)</label> <input type="number" name="phpFinalMarks">
        </fieldset>
        <br>
        <fieldset>
            <legend>Laravel</legend>
            <label>CA1 (Out of 30)</label> <input type="number" name="laravelCa1Marks"><br><br>
            <label>CA2 (Out of 30)</label> <input type="number" name="laravelCa2Marks"><br><br>
            <label>Final (Out of 50)</label> <input type="number" name="laravelFinalMarks">
        </fieldset>
        <br><br>
        <input type="submit" name="Submit" onclick="check()">
    </form>
</body>
</html>