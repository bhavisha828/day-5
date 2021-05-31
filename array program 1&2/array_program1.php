<?php 

//Numerical Array
//Method 1
echo "Numerical Array";
$a[0] = 10;
$a[1] = "b1";
$a[2] = 30.29;
$a[3] = 40;
$a[4] = "Bhavisha";
$a[5] = "4";

echo "<br> $a[4]";
?>

<?php  echo "<hr>" ?>



<?php 
//Dynamic Array
//method 2

echo "Dynamic Array";
$a[] = 10;
$a[] = "b1";
$a[] = 30.29;
$a[] = 40;
$a[] = "Bhavisha";
$a[] = "4";

echo "<br> $a[1]";
?>

<?php  echo "<hr>" ?>



<?php
//method 3

$a = array(10,"b1",30.29,40,"Bhavisha","4");
echo $a[3];

?>


<?php  echo "<hr>" ?>

<?php
echo "print whole Array";

for ($i=0; $i <count($a) ; $i++) { 
	echo "<br/>" .$a[$i];
}

?>