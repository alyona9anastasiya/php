#!/usr/bin/php
<?PHP

$res = array();
$ascii = array();
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
foreach ($res as $key => $value)
{
	if (ctype_digit($value))
	{
		$res[$key] = intval($value);
	}
	else if (ctype_alpha($value) == FALSE && is_numeric($value) == FALSE)
	{
		$ascii[] = $value;
	}
}
sort($ascii);
sort($res);
foreach ($res as $value)
	echo "$value\n";
foreach ($ascii as $value)
	echo "$value\n";


?>