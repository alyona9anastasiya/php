#!/usr/bin/php
<?PHP


$read = fopen("/var/run/utmpx", "rb");
	fseek($read, 1256);
	date_default_timezone_set("Africa/Johannesburg");
	while (!feof($read))
	{
		$res = fread($read, 628);
		if (strlen($res) == 628)
		{
			$res = unpack("a256user/a4id/a32line/ipid/itype/itime", $res);
			if ($res['type'] == 7)
			{
				echo trim($res['user']) . " ";
				echo trim($res['line']) . "  ";
				$ch = date("M d H:i", $res['time']);
				echo $ch . " \n";
			}
		}
	}


?>