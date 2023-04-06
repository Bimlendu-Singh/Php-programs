<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sort and array</title>
</head>
<body>
    <?php
    
      $number = array(40,62,2,22,1);
      sort($number);
      $arrlength = count($number);
      
      for($x=0; $x<$arrlength; $x++)
      {
        echo "$number[$x]";
        echo "<br>";
      }
    
    ?>
</body>
</html>