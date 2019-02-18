#!/usr/bin/php
<?PHP


function ft_split($argc)
{
	$ar = trim($argc);
	$ar = preg_replace("( +)" ," ",$ar);
	$piece = array();
	if ($ar)
		$piece = explode(' ', $ar);
	sort($piece);
	return ($piece);
}





?>