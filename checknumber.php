<?php

function checkNumber($num)
{
	return ($num % 2);
}

$num = 500;

if(checkNumber($num))
{
	echo 'Odd number';
} else{
	echo 'Even number';
}

?>