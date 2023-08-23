<?php
$twodarray=array(
	array(10,50,20),
	array(25,300,5),
	array(20,50,60)
);
$maxnum=$twodarray[0][0];
foreach($twodarray as $row)
{
	foreach($row as $element)
	{
		if($element>$maxnum )
		{
			$maxnum=$element;
			$minnum=$element;
		}	
	}
}
$minnum=$twodarray[0][0];
foreach($twodarray as $row)
{
	foreach($row as $element)
	{
		if($element<$minnum)
		{
			$minnum=$element;
		}	
	}
}

echo "Max number in the array is $maxnum";
echo "<br>";
echo "Min number in the array is $minnum";
?>