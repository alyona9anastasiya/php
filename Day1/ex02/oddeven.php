#!/usr/bin/php
<?PHP



echo "Enter a number: ";
	
while ($res = fgets(STDIN))
{
	$final = trim($res, "\n");
	if (ctype_digit($final))
	{
		$last = substr($final, -1);
		if (($last % 2) == 0)
		{
			echo "The number $final is even\n";
		}
		else
		{
			echo "The number $final is odd\n";
		}
	}
	else
		echo "'$final' is not a number\n";
	echo "Enter a number: ";
}
echo "^D\n";



?>