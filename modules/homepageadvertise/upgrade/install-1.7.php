<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_7($object)
{	
	Configuration::updateValue('homepageadvertise_hook', 1);
	$object->registerHook('maxSlideshow');
	return true;
}
