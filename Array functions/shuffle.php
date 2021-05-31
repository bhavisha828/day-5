<?php
$A = array("one", "two", "three", "four", "five");
shuffle($A); 
foreach ($A as $key => $value) {
echo "<br /> $value ";
}