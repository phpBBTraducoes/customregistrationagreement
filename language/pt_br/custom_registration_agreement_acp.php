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
	'ENABLE_CUSTOM_AGREEMENT'					=> 'Ativar Contrato de Registro Personalizado',
	'ENABLE_CUSTOM_AGREEMENT_EXPLAIN'			=> 'Se estiver desativado, a mensagem padrão será exibida.',

	'CUSTOM_AGREEMENT'							=> 'Contrato de registro personalizado',
	'CUSTOM_AGREEMENT_EXPLAIN'					=> '',

	'CUSTOM_AGREEMENT_PREVIEW'					=> 'Contrato de registro personalizado - Prever',
));
