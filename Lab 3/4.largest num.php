<?php
$num1 = 18;
$num2 = 49;
$num3 = 25;
 
if ($num1 >= $num2 && $num1 >= $num3) {
    echo "Largest: $num1<br>";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "Largest: $num2<br>";
} else {
    echo "Largest: $num3<br>";
}
?>
