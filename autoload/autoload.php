<?php

use Luba\Aliases;

spl_autoload_register(function($classname){

	$class = Aliases::get($classname);

	if (!is_null($class))
	{
		eval("class $classname extends $class {}");
	}
});