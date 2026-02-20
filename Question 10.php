<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Grade Calculator</h3>
<form method="post">
    Enter Marks:
    <input type="number" name="marks" required>
    <input type="submit" name="check" value="Check">
</form>
<?php

    if(isset($_POST['check']))
{
    $marks = $_POST['marks'];

    if($marks >= 90)
        echo "<br>Grade A+";
    else if($marks >= 80)
        echo "<br>Grade A";
    else if($marks >= 70)
        echo "<br>Grade B+";
    else if($marks >= 60)
        echo "<br>Grade B";
    else if($marks >= 50)
        echo "<br>Grade C";
    else
        echo "<br>Fail";
  }
     ?>
</body>
</html>
