<?php
echo "Enter a number: ";
$number = readline();

echo "Enter another number: ";
$number2 = readline();

$sum = $number + $number2;
$diff = $number - $number2;
$and = $number * $number2;

$results = [$sum, $diff, $and];

foreach ($results as $result){
echo "Results : $result \n";
}
?>