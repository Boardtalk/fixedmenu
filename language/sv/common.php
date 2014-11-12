<?php
/**
*
* @package phpBB Extension - Boardtalk Fixed Menu
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Swedish translation by Holger (http://www.maskinisten.net)
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
	'ACP_ABOUT'						=> 'Version 0.0.2 av <a href="http://boardtalk.org/" target="_blank">Boardtalk</a>',
	'ACP_FIXEDMENU'					=> 'Inställningar',
	'ACP_FIXEDMENU_SETTING_SAVED'	=> 'Inställningarna har sparats!',
	'ACP_FIXEDMENU_TITLE'			=> 'Boardtalk Fixed Menu',
	'ACP_FIXEDMENU_TYPE'			=> 'Fixed Menu mall-optioner',

	'CUSTOM'						=> 'Transparens',
	'DEFAULT' 						=> 'Standard',
	'DONATE'						=> 'Donera',
	'DONATE_INFO'					=> 'Gillar du detta tillägg? Du kan tacka med en donering.',
	'DONATE_THANKS' 				=> 'Tack!',
	'FADEIN' 						=> 'CSS Fade-in',
	));
