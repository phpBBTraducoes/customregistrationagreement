<?php
/**
*
* Custom Registration Agreement extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by eunaumtenhoid [2020][ver 1.0.0] (https://github.com/phpBBTraducoes)
* @copyright (c) 2017 Rubén Calvo <rubencm@gmail.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP Module
	'ACP_CUSTOM_REGISTRATION_AGREEMENT_TITLE'	=> 'Contrato de Registro Personalizado',
	'ACP_SETTINGS'								=> 'Configurações',
));
