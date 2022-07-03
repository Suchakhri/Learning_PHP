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
//  This is comment.
#   This is comment.
/*  This is Comment.   */ 
$x = 5; // global scope

function myTest(){
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x </p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>