#!/usr/bin/php
<?PHP

function ft_is_sort($tab)
{
	$tab1 = $tab;
	$tab2 = $tab;
	sort($tab1);
	rsort($tab2);
	if ($tab1 === $tab || $tab2 === $tab)
		return true;
	else
		return false;
} 

?>