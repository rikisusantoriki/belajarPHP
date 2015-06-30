<?php
for ($i=1; $i<=10; $i++)
{
    echo $i; 
	echo "==>";
	for($j=1; $j<=3; $j++)
	{ 
	if($i==$j)
	{
	echo $j;
	}
	}
    echo "<br>";
	
}
?>