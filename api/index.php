<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP on Vercel</title>
</head>
<body>
<h3>GET_METHOD</h3>
<form action="get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<br />
<br />
<h3>POST_METHOD</h3>
<form action="get.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
<?php
//  This is comment.
#   This is comment.
/*  This is Comment.   */ 




?>

</body>
</html>