<?php 

$arr = array(
"Mango" => "Yellow", 
"strawbery" => "Red", 
"graps" => "Green");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}

?>