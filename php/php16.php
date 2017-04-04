<?php 

$a=$_POST["str1"];
$b=$_POST["str2"];
echo "string1 ==".$a."<br>";
echo "string2 ==".$b."<br>";
echo "concantenated string is ==".$a." ".$b;
echo "<br>";
if(strpos($b,$a) !== false)
{
	echo "string2 contains string1<br>";
	echo "removing string1 fron string2 gives ==";
	$d=str_replace($a,"",$b);
	echo $d;
	//echo $a." ".$d;
}
else
echo "string1 not present in string2";
 ?>