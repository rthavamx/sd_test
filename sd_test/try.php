<?php
$x = 5;
$y =2;
function myTest() {
	$y =20;
    //global $y; => 
	$y =3;
    echo "<p>Variable x  function is: $y</p>";
} 
function myTest3() {
     $x = 0;
    echo $x;
    $x++;
}
function myTest2() {
	   $y =20;
	   global $x;
	   $y = $x+$y;
    echo "<p>Variable x  function is: $x</p>";
	echo "<p>Variable y  function is: $y</p>";
	print "$x";
	print "$x";
}
myTest3();
myTest3();
myTest3();
myTest2();
myTest();
echo "<p>Variable x  function is: $x</p>";
echo "<p>Variable y  function is: $y</p>";
echo "<p>Variable y  function is: $y</p>";
?>
