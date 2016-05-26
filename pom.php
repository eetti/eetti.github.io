<?php
$array = array("name"=>"paul");
print_r($array);

$array_1 = $array;
$array_1["id"] = 1;

print_r($array_1);

$array_2 = $array;
$array_2[]["id"] = 1;

print_r($array_2);
?>