<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Number Program</title>
</head>
<body>

<h2>Enter Number</h2>

<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Number:
    <input type="number" name="num" required>
    <br><br>

    <input type="submit" name="cube" value="Cube">
    <input type="submit" name="table" value="Table">
    <input type="submit" name="fact" value="Factorial">
    <input type="submit" name="prime" value="Prime Check">
</form>

<hr>

<?php

if(isset($_POST['num']))
{
    $n = (int)$_POST['num'];

    if(isset($_POST['cube']))
    {
        echo "<h3>Q1: Find Cube of a Number</h3>";
        echo "Answer: Cube = " . ($n*$n*$n);
    }

    elseif(isset($_POST['table']))
    {
        echo "<h3>Q2: Print Table of a Number</h3>";
        for($i=1;$i<=10;$i++)
        {
            echo "<br>".$n." x ".$i." = ".($n*$i);
        }
    }

    elseif(isset($_POST['fact']))
    {
        echo "<h3>Q3: Find Factorial of a Number</h3>";
        $f = 1;
        for($i=1;$i<=$n;$i++)
        {
            $f = $f * $i;
        }
        echo "<br>Answer: Factorial = ".$f;
    }

    elseif(isset($_POST['prime']))
    {
        echo "<h3>Q4: Check Prime Number</h3>";

        if($n <= 1)
        {
            echo "Answer: Not Prime Number";
        }
        else
        {
            $count = 0;

            for($i=1;$i<=$n;$i++)
            {
                if($n % $i == 0)
                {
                    $count++;
                }
            }

            if($count == 2)
                echo "Answer: Prime Number";
            else
                echo "Answer: Not Prime Number";
        }
    }
}

?>


</body>
</html>

</body>
</html>

