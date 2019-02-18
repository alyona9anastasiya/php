#!/usr/bin/php
<?PHP


if ($argc == 2)
	{
		$red = fopen($argv[1], 'r');
		while (!feof($red))
		{
			$res = fgets($red);
			$res = preg_replace_callback('/<a.*?title="(.*?)">/', function ($matches){
				return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
			}, $res);
			$res = preg_replace_callback('/<a.*?>(.*?)</', function ($matches) {
				return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
			}, $res);
			echo $res;
		}
	}






?>