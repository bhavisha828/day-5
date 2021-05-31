<?php
$A = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($A);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
?>