<?php
echo "Enter a number: ";
$num1 = readline();

echo "Enter an operator: ";
$operator = readline();

echo "Enter another number: ";
$num2 = readline();

if ($operator == "+") {
    $result = $num1 + $num2;
    echo "Result: $result \n";
} elseif ($operator == "-") {
    $result = $num1 - $num2;
    echo "Result: $result \n";
} elseif ($operator == "*") {
    $result = $num1 * $num2;
    echo "Result: $result \n";
} elseif ($operator == "/") {
    if ($num2 == 0) {
        echo "Error: Cannot divide by zero!\n";
    } else {
        $result = $num1 / $num2;
        echo "Result: $result\n";
    }
}
else {
    echo "Invalid operator! \n";
}
?>