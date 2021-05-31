<?php 

$a = array('html','css','js','bootstrap','php');
$newa = array_count_values($a);

foreach ($a as $key => $value) {
	echo "<br/>$key - <b>$value</b>";
}

?>