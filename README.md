# PHP-variables
This file includes PHP variables
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<body>
 <?php
 $x= 5; //global variable
 function myTest(){
	//using xinside this function will genarated an error 
	echo "Variable x inside function is: $x";
	 
 }
 myTest();
 echo "Variable x outside function will generated: $x";
 ?>
</body>
</html>
