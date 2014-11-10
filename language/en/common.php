<?php
/**
*
* @package phpBB Extension - Boardtalk Fixed Menu
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_ABOUT'						=> 'Version 0.0.2 by <a href="http://boardtalk.org/" target="_blank">Boardtalk</a>',
	'ACP_FIXEDMENU'					=> 'Settings',
	'ACP_FIXEDMENU_SETTING_SAVED'	=> 'Settings have been saved successfully!', 	
	'ACP_FIXEDMENU_TITLE'			=> 'Boardtalk Fixed Menu',	
	'ACP_FIXEDMENU_TYPE'			=> 'Fixed Menu Style Options', 
	
	'CUSTOM'						=> 'Transparency',	
	'DEFAULT' 						=> 'Default',
	'DONATE'						=> 'Donate',
	'DONATE_INFO'					=> 'Like the Extension? Show your appreciation by donating.',
	'DONATE_THANKS' 				=> 'Thank you!',
	'FADEIN' 						=> 'CSS Fade-in',
	));
