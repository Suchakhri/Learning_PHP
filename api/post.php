<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST_METHOD</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['fname'];
        if (empty($name) or empty($email)) {
          echo "Name || Email are empty";
        } else {
          echo "My name is ".$name."<br />My email is : ".$email;
        }
      }
    ?>
</body>
</html>