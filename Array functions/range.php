<?php
$arr = range("1", "15");
foreach($arr as $key => $value)
{
echo "<br/> $key - $value ";
} 
?>


<?php echo "<hr>"; ?>
<?php 
$a = range('a','z');
 print_r($a);

?>

<?php 

echo "<hr>";
echo "select a year:";
$year = range(1900,2021);
echo "<select>";
foreach ($year as $value) 
{
echo 
"<option>$value</option>";
}
echo "</select>";
?>