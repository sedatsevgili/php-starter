<?php
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result1 = array_diff($array1, $array2);
$result2 = array_intersect($array2, $array1);

print_r($result1);
print_r($result2);

?>
