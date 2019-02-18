#!/usr/bin/php
<?PHP

$result = preg_replace("( +)" ," ", trim($argv[1]));
if ($result)
	echo "$result";

?>