<?php
	echo "<h1>Marksheet</h1>";
	$a = 60;
	$b = 50;
	$c = 40;
	$d = 45;
	$e = 55;
	$f = 69;
	echo "<br>First sub:". $a;
	echo "<br>Second sub:".$b;
	echo "<br>Third sub:" . $c;
	echo "<br>Forth sub:" . $d;
	echo "<br>Fifth sub:" . $e;
	echo "<br>Sixth sub:" . $f;
	$total=$a+$b+$c+$d+$e+$f;
	echo "<br>Total is:".$total;
	$per=$total/6;
	echo "<br>Percentage is:".$per;
	

?>
