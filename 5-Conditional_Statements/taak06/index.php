<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
     
    
    <?php 
 $var1 = 6;
 $var2 = 4;

 if($var1 < 10 && $var2 > 5) {
     echo "het getal zit tussen de 10 en de 5!";
 } else {
     echo "het getal is groter dan 10 of kleiner dan 5!";
 }
 echo"<br>";
 if($var1 < 10 || $var2 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}
echo"<br>";
if($var1 < 10 xor $var2 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}
echo"<br>";
if($var1 < 10 && $var2 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}
  
  ?>
    
  </body>

    
</html>