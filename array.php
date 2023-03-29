<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    
 <?php

  //Program checking array , various types of arrays

  $checking = "It's working!";
  echo "$checking <br>";

  //Numeric array

  $salary = array(220,300,400,500,800);

  foreach($salary as $va)
   {
        echo "value is : $va <br>";
   }

   $salari = array("bheem"=> 10000, "vijay"=> 4000, "srawan"=> 2000);

   foreach($salari as  $x=>$values)
   {
       echo "salari of : $x=>$values <br>";
   }

 ?>

</body>
</html>