<?php
	include 'quadrilateral.php';

	$sq1 =  new Square(24);
	echo Square::$objCount;
	$sq2 =  new Square(12);
	echo "<br>";
	echo Square::$objCount;
	$sq3 =  new Square(100);
	echo "<br>";
	echo Square::$objCount;
?>