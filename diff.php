<?php

class Diffnt
{

	public function __construct()
	{
			echo 'Hello';
	}

	public function diff($string1='',$string2='')
	{

		$strings1=explode(PHP_EOL,$string1);
		$strings2=explode(PHP_EOL,$string2);

		var_dump($strings1);
	var_dump($strings2);



	}

}