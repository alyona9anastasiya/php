#!/usr/bin/php
<?PHP


if ($argc == 2)
{
$brr = array();

$ar = $argv[1];
list($day_week, $day, $month, $year, $time) = explode(' ', $ar);
 

if ($day_week == "Lundi")
	$day_week = "Monday";
else if ($day_week == "Mardi")
	$day_week = "Tuesday";
else if ($day_week == "Mercredi")
	$day_week = "Wednesday";
else if ($day_week == "Jeudi")
	$day_week = "Thursday";
else if ($day_week == "Vendredi")
	$day_week = "Friday";
else if ($day_week == "Samedi")
	$day_week = "Saturday";
else if ($day_week == "Dimanche")
	$day_week = "Sunday";


if ($month == "Janvier")
	$month = "January";
else if ($month == "Février")
	$month = "February";
else if ($month == "Mars")
	$month = "March";
else if ($month == "Avril")
	$month = "April";
else if ($month == "Mai")
	$month = "May";
else if ($month == "Juin")
	$month = "June";
else if ($month == "Juillet")
	$month = "July";
else if ($month == "Août")
	$month = "August";
else if ($month == "Septembre")
	$month = "September";
else if ($month == "Octobre")
	$month = "October";
else if ($month == "Novembre")
	$month = "November";
else if ($month == "Décembre")
	$month = "December";


$brr[0] = $day_week;
$brr[1] = $day;
$brr[2] = $month;
$brr[3] = $year;
$brr[4] = $time;


$a = implode(" ", $brr);


$k = (strtotime($a) - 3600);


if ($k == -3600 || ($time == 0 || $year == 0)) {
	echo "Wrong Format\n";
	return ;
}
if (!(ctype_digit(substr($time, -1))))
	{
		echo "Wrong Format\n";
		return ;
	}

echo "$k\n";
}


?>