<?php

use Luba\Aliases;

public function __autoload($classname)
{
	$class = Aliases::get($classname);

	if (!is_null($class))
	{
		$r = new ReflectionClass($class);
		include $r->getFilename();
	}
}