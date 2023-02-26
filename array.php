<?php

$name = array("sara","riya","tinu","alfiya");
print_r($name);
sort($name);
$clength=count($name);
echo "<br>"."Sorted"."<br>";
for($x=0;$x<$clength;$x++)
{
echo $name[$x]."<br>";
}
$age=array("sara"=>"20","riya"=>"19","tinu"=>"22","alfiya"=>"21");
asort($age);
echo "Sorted using age in descending order"."<br>";
foreach($age as $x => $x_values)
{
	echo $x."<br>";
}

$age=array("sara"=>"10","riya"=>"11","tinu"=>"12","alfiya"=>"13");
arsort($age);
echo "Array values"."<br>";
foreach($age as $x => $x_values)
{
	echo $x." value=".$x_values."<br>";
} 
?>
