<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Salary Calculator</h3>

<form method="post">
    Basic Salary: <input type="number" name="basic" required><br><br>
    HRA: <input type="number" name="hra" required><br><br>
    DA: <input type="number" name="da" required><br><br>

    <input type="submit" name="calculate" value="Calculate">
</form>
<?php
if(isset($_POST['calculate']))
 {
    $basic = $_POST['basic'];
    $hra   = $_POST['hra'];
    $da    = $_POST['da'];

    $total = $basic + $hra + $da;

    echo "<br>Total Salary = " . $total;
}
        ?>
</body>
</html>