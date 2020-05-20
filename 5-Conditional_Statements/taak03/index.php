<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
     
    
    <?php 
  $test1 = 3;
  $test2 = 6;

  if($test1 == $test2){
    echo "Gelijk";
  }
  else{
    echo"Niet gelijk!";

  }
  echo"<br>";
  if($test1 != $test2){
    echo "ongelijk";
  }
  else{
    echo "Wel gelijk!";

  }
  echo"<br>";
  if($test1 === $test2){
    echo "identiek";
  }
  else{
    echo "Niet identiek";

  }
  echo"<br>";
  if($test1 > $test2){
    echo "test 1 is groter dan test 2";
  }
  else{
    echo "Test 1 is kleiner dan test 2";


  }
  echo"<br>";
  if($test1 >= $test2){
    echo "test 1 is groter of gelijk aan test 2";
  }
  else{
    echo "test 1 is niet groter of gelijk aan test 2";

  }
  echo"<br>";
  if($test1 <= $test2){
    echo "test 1 is kleiner of gelijk aan test 2";
  }
  else{
      echo "test 1 is groter dan test 2";
  }

  
  ?>
    
  </body>

    
</html>