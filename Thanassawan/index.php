<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>PHP DAY2</title>
</head>

<body>
    <div class="container">
        <h4>Excercise 1</h4>
        <form method="POST">
            Firstname: <input type="text" name="firstname">
            Lastname: <input type="text" name="lastname">
            <input type="submit" name="submit1">
        </form>

        <h4>Excercise 2</h4>
        <form method="POST">
            Number 1: <input type="text" name="num1">
            Number 2: <input type="text" name="num2">
            <input type="submit" name="submit2">
        </form>

        <h4>Excercise 3</h4>
        <form method="POST">
            Math : <input type="text" name="num1">
            Physics : <input type="text" name="num2">
            English : <input type="text" name="num3">
            <input type="submit" name="submit3">
        </form>

        <?php
        #Excercise 1 -----------------------------------------------------------------------------------------------------
        if (isset($_POST["submit1"])) {

            if (!$_POST["firstname"] || !$_POST["lastname"]) {
                echo "Please Insert both firstname and lastname <br>";
            } else {
                echo "Welcome " . $_POST['firstname'] . " " . $_POST['lastname'] . "<br>";
            }
        }

        #Excercise 2 -----------------------------------------------------------------------------------------------------
        if (isset($_POST["submit2"])) {
            if ($_POST["num1"] && $_POST["num2"]) {
                $num1 = (int)$_POST["num1"];
                $num2 = (int)$_POST["num2"];
                if ($num2 > 0) {
                    $result = calDivide($num1, $num2);
                    echo "$num1 divided by $num2 equals to $result";
                }
            } else {
                echo "Please Insert both numbers and the Number 2 should be more than 0. <br>";
            }
        }

        function calDivide($num1, $num2)
        {
            return $num1 / $num2;
        }

        #Excercise 3 -----------------------------------------------------------------------------------------------------
        if (isset($_POST["submit3"])) {
            if ($_POST["num1"] && $_POST["num2"] && $_POST["num3"]) {
                $num1 = (int)$_POST["num1"];
                $num2 = (int)$_POST["num2"];
                $num3 = (int)$_POST["num3"];
                if ($num1 > 0 && $num1 < 6 && $num2 > 0 && $num2 < 6 && $num3 > 0 && $num3 < 6) {
                    $average = calAverage($num1, $num2, $num3);
                    echo "Grade for Math is $num1, Physics is $num2 and English is $num3. Total grade average is $average. <br>";
                } else {
                    echo "Please Insert all grade numbers between 1-5. <br>";
                }
            } else {
                echo "Please Insert all grade numbers. <br>";
            }
        }

        function calAverage($num1, $num2, $num3)
        {
            return ($num1 + $num2 + $num3) / 3;
        }

        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>