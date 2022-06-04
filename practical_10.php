<!DOCTYPE html>
<html>
<body>
<?php
//Initialize matrix a
$t=array();
$a = array
(
 array(1, 2, 3),
 array(4, 5, 6),
 array(7, 8, 9)
 );
 //Calculates number of rows and columns present in given matrix
 $rows = count($a);
 $cols = count($a[0]);
 
 // Declare array t with reverse dimensions and initialize it with 0
 $t = array_fill(0, $cols, array_fill(0, $rows, 0));
 
 //Calculate transpose of given matrix
 for($i = 0; $i < $cols; $j++)
 {
    for($i = 0; $i < $rows; $j++)
    {
        $t[$i][$j] = $a[$j][$i];
    }
}
print("Transpose of given matrix: <br>");
for($i = 0; $i < $cols; $i++)
{
for($j = 0; $j < $rows; $j++)
{
print($t[$i][$j] . " ");
}
print(" <br>");
}