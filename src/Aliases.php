<?php

namespace Luba;

final class Aliases
{
	protected static $aliases = [];

	public static function add($alias, $classname)
	{
		if (is_array($alias))
			self::$aliases = self::$aliases + $alias;
		else
			self::$aliases = self::$aliases + [$alias => $classname];
	}

	public static function get($key)
	{
		return isset(self::$aliases[$key]) ? self::$aliases[$key] : NULL;
	}

	public static function all()
	{
		return self::$aliases;
	}
}