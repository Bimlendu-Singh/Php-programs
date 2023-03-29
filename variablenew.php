<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    
 <?php
 
    $if = 200;  //int data type
    $gone = 2.44;  //float data type
    $india = "is my country"; //string data type
    $arr = [11,12,13,14];  //array data type

    $season = "Mango season";

    echo "I have $if money which will be $gone in Dollar! <br>";
    echo "India $india<br>";
    
    //We using '.' for concatenating the string.
    echo "This is $season " . "We eat Mango in summer season. ";
    echo "<br>Let's see some maths " . (20+30);

    //Showing first index of the array
    echo "<br> Here array with it's first index " . ($arr[0])  ;

 ?>

</body>
</html>