<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <span class="text-center"><h1>Calculator</h1></span>
    <br>
    <div class="container">
    <form method="GET">
        <label>Input 1:</label> <br>
        <input type="number" id="num1" name="num1" placeholder="Number 1" required>
        <br><br>
        <label for="">Input 2:</label><br>
        <input type="number" id="num2" name="num2" placeholder="Number 2" required>
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

    <p> Answer is: </p>
</div>    
</body>
</html>

<?php
function add($num1, $num2){
    return $num1 + $num2;
}
function sub($num1, $num2){
    return $num1 - $num2;
}
function mul($num1, $num2){
    return $num1 * $num2;
}
function div($num1, $num2){
    return $num1 / $num2;
}

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

