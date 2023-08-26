<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<body>
<h1>My First PHP Page</h1>
 <?php
    $txt= "Padma Bridge";
	//echo, ECHO, EcHo are same value
	echo "I love & Like $txt </br>";
	ECHO "I love my Country Bangladesh </br>";
	EcHo "I love my Country Bangladesh </br>";
	echo "I love my Country Bangladesh </br>";
	//Scolor, SCOLOR, $CoLor are different variable
	$color= "red";
$COLOR= "white";
$CoLor= "Green";
	echo "My car is $color <br>";
	echo "My car is $COLOR <br>";
	echo "My car is $CoLor <br>";
	
	$x=5 /* +15 */+5;
	echo $x;
	echo "<br>";
	$txt1= "Hello World";
	$z=10.5;
	$y=5;
	echo $txt1;
	echo "<br>";
	echo $z;
	echo "<br>";
	echo $z;
	echo "<br>";
	$txt2= "w3schools.com";
	echo "I love $txt2";
	echo "<br>";
	$txt3= "w3schools.com";
	echo "I love".$txt3."!";
	echo "<br>";
	$m= 10;
	$n= 15;
	echo $m+$n;
	echo "<br>";
	echo $m-$n;
	echo "<br>";
	echo $n/$m;
	echo "<br>";
	echo $m*$n;
	echo "<br>";
	echo $n%$m;
 ?>
</body>
</html>
