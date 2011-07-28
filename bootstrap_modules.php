<?php

include_once('bootstrap.php');

// Enable all modules we can find
$modules_temp = explode(',', $_SERVER['KOHANA_MODULES']);

foreach ($modules_temp as $module)
{
	$modules[$module] = MODPATH.$module;
}

Kohana::modules(Kohana::modules() + $modules);

unset ($modules_temp, $modules, $module);
