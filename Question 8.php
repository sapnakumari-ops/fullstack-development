<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Subject Marks - Total & Percentage</h3>

<form method="post">
    Subject 1: <input type="number" name="m1" required><br><br>
    Subject 2: <input type="number" name="m2" required><br><br>
    Subject 3: <input type="number" name="m3" required><br><br>
    Subject 4: <input type="number" name="m4" required><br><br>
    Subject 5: <input type="number" name="m5" required><br><br>

    <input type="submit" name="calculate" value="Calculate">
</form>

<?php

if(isset($_POST['calculate']))
{
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];
    $m4 = $_POST['m4'];
    $m5 = $_POST['m5'];

    $total = $m1 + $m2 + $m3 + $m4 + $m5;
    $percentage = $total / 5;

    echo "<br>Total = " . $total;
    echo "<br>Percentage = " . $percentage . "%";
}

?>

</body>
</html>