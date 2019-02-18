#!/usr/bin/php
<?PHP

$res = array();
function ft_split($arn)
{
	$ar = trim($arn);
	$ar = preg_replace("( +)" ," ",$ar);
	$piece = array();
	if ($ar)
		$piece = explode(' ', $ar);
	sort($piece);
	return ($piece);
}

$array = $argv;
unset($array[0]);
foreach ($array as $ar)
	$res = array_merge($res, ft_split($ar));
sort($res);
foreach ($res as $value)
	echo "$value\n";


?>