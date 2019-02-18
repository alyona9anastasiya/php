#!/usr/bin/php
<?PHP


$res = array();

if ($argc == 2)
{
	$array = $argv[1];
	$array = trim($array);
	$array = explode(" ", $array);
	$array = array_filter($array);
	$ar = $array[0];
	unset($array[0]);
	foreach ($array as $value)
		array_push($res, $value." ");
	array_push($res, $ar);
	$res = (implode($res));
	echo "$res\n";
}
else if ($argc > 2)
	echo "$argv[1]\n";
?>