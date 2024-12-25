<?php
echo"php function<br>";
function myfun( ){
	echo"hello world";

}

myfun();

echo "<br><hr>";
echo"function arrgument <br>";

function studentname($name){
	echo"my name is.".$name;
}
studentname("pooja");echo"<br>";
studentname("priya");echo"<br>";
echo "<br><hr>";

function name($fname,$lname){
	echo"my name is.".$fname." ".$lname;

}
name("pooja","pawar");echo"<br>";
name("deepa","barve");echo"<br>";
echo "<br><hr>";

echo"Default argument<br>";
function setHt($height=50){
	echo "The hight:".$height;
	echo "<br>";
}
setHt(20);
setHt(34);
setHt(60);
setHt();
echo"<br><hr>";

echo"sum <br>";
function sum($a,$b){
	echo $a+$b;
	echo "<br>";
}
$x=30;
$y=60;
sum($x,$y);
$d=77;
$e=32;
sum($d,$e);
echo"<br><hr>";


?>