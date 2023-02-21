
<?php
$value1=40;
$value2=67;

echo " <h1>before swap: <b>value1 = ",$value1, " and value2 = ",$value2,"</b></h1>";

$swap=$value2;
$value2=$value1;
$value1=$swap;

printf("<h1><br> after swap: <b>value1 =%d and value2 = %d</b><h1>",$value1,$value2);


?>