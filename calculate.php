<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            echo "<h1>Result: $result</h1>";
            break;
        case "subtract":
            $result = $num1 - $num2;
            echo "Result: $result";
            break;
        case "multiply":
            $result = $num1 * $num2;
            echo "Result: $result";
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "Result: $result";
            } else {
                echo "Cannot divide by zero.";
            }
            break;
        case "binary":
            echo "Binary: " . decbin($num1);
            break;
        case "octal":
            echo "Octal: " . decoct($num1);
            break;
        case "hexadecimal":
            echo "Hexadecimal: " . dechex($num1);
            break;
    }
}
