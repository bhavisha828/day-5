<?php
$A = array(
"mango" => "Yellow", 
"strawbery" => "Red", 
"graps" => "Green");
$uppercase = array_change_key_case($A,CASE_UPPER);
print_r($uppercase);
?>