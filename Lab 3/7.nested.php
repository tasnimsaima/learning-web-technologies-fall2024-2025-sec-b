<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>
  
<?php
$rows = 3;
$count = 1;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $rows - $i + 1; $j++) {
        echo $count++ . " ";
    }
    echo "<br>";
}
?>

 <?php
 $letters = 'A';
 for ($i = 0; $i < 3; $i++) {
     for ($j = 0; $j <= $i; $j++) {
         echo $letters++ . " ";
     }
     echo "<br>";
 }
 ?>
 