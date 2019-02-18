#!/usr/bin/php
<?PHP


function ft_split($argc)
{
	$ar = trim($argc);
	$ar = preg_replace("( +)" ," ",preg_replace("(\t+)", " ", $ar));
	echo "$ar\n";
}

if ($argc == 2)
{
	ft_split($argv[1]);
}

?>