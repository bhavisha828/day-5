<?php
$arr = array(
"Mango" => "Yellow", 
"strawbery" => "Red", 
"graps" => "Green");
krsort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}