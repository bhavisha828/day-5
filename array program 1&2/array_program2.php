<?php
//Associative Array
//Key = Value
//Method 1
$a[0] = 1;
$a['php'] = "Hypertext preprocessor";
$a['WD'] = "web development";
$a[2] = "two";
$a[69] = 6.9;

echo "<br./>php for ".$a['php'];
echo "<BR/>WD for ".$a['WD'];
echo "<br/>2 -- ".$a['2'];
echo "<br/>69 -- ".$a['69'];
?>

<?php echo "<hr>"; ?>

<?php  
//method 2

$a = array(
      0 => 10,
     "php" => "Hypertext preprocessor",
     "WD" => "web development",
      2 => "two",
      69 => "6.9"
  );

echo "<br./>php for ".$a['php'];
echo "<BR/>WD for ".$a['WD'];
echo "<br/>2 -- ".$a['2'];
echo "<br/>69 -- ".$a['69'];
?>

<?php echo "<hr>"; ?>

<?php 
//foreach loop

foreach ($a as $value) {
	echo "<br/>Value is $value";
}

echo "<hr>";

foreach ($a as $key => $value) {
	echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";
}


//3 Inbuilt Functions to Debug an Array
echo "<pre>";
print_r($a);
echo "<pre>";
var_dump($a);
echo "<pre>";

