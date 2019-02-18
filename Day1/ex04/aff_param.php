#!/usr/bin/php
<?PHP

if ($argc == 1)
	return ;
foreach ($argv as $elem => $value)
{
	if ($elem != 0)
		echo "$value\n";
}



?>