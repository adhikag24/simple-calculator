<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Calculator</h1>
    <br>
    <div class="container">
    <form method="GET">
        <label>Input 1:</label> <br>
        <input class= "form" type="number" id="num1" name="num1" placeholder="Number 1" required>
        <br><br>
        <label for="">Input 2:</label><br>
        <input class= "form" type="number" id="num2" name="num2" placeholder="Number 2" required>
        <br><br>
        <label for="">Choose Operation: </label>
        <select name="operation" id="operation">
            <option value="add">Add (+)</option>
            <option value="sub">Substract (-)</option>
            <option value="mul">Multiply (*)</option>
            <option value="div">Divide (/)</option>
        </select>

        <button type="Submit" name="submit" value="submit">Calculate</button>
    </form>

    <p class="answer"> Answer is: </p>
</div>    
</body>
</html>

<?php
require_once("calculate.php");
    if(isset($_GET['submit'])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operation = $_GET["operation"];

         if ($operation == "add"){
              echo add($num1, $num2);
        }
         else if ($operation == "sub"){
             echo sub($num1, $num2);
         }
         else if ($operation == "mul"){
             echo mul($num1, $num2);
         }
         else if ($operation == "div"){
                echo div($num1, $num2);
         }
    }

?>

