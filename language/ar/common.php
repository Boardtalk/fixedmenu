<?php
/**
*
* @package phpBB Extension - Boardtalk Fixed Menu
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'ACP_ABOUT'						=> 'الإصدار : 0.0.2 بواسطة <a href="http://boardtalk.org/" target="_blank">Boardtalk</a>',
	'ACP_FIXEDMENU'					=> 'الإعدادات',
	'ACP_FIXEDMENU_SETTINGS'		=> 'إعدادات القائمة المُثبتة',
	'ACP_FIXEDMENU_SETTING_SAVED'	=> 'تم حفظ الإعدادات بنجاح !', 	
	'ACP_FIXEDMENU_TITLE'			=> 'القائمة المُثبتة',	
	'ACP_FIXEDMENU_TYPE'			=> 'الشكل ', 
	
	'CUSTOM'						=> 'شفاف ',	
	'DEFAULT' 						=> 'إفتراضي',
	'DONATE'						=> 'تبرع',
	'DONATE_INFO'					=> 'لو أعجبتك هذه الإضافة , الرجاء التبرع لمزيد من الدعم واستمرار تطويرها.',
	'DONATE_THANKS' 				=> 'شكراً لك !',
	'FADEIN' 						=> 'وميض CSS',
	));
