<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>
<body>
    
<h1>The sum of two numbers </h1>
<?php


if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum =$num1 +$num2 ;
    echo  $fname.$lname;
    echo "<p>The sum of $num1 and $num2 and $sum is : $sum<p>";
}
?>
</body>
</html>