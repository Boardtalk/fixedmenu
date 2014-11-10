<?php
/**
*
* @package phpBB Extension - Boardtalk Fixed Menu 
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace boardtalk\fixedmenu\acp;

class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\boardtalk\fixedmenu\acp\main_module',
			'title'		=> 'ACP_FIXEDMENU_TITLE',
			'version'	=> '0.0.2',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_FIXEDMENU', 'auth' => 'ext_boardtalk/fixedmenu && acl_a_board', 'cat' => array('ACP_FIXEDMENU_TITLE')),
			),
		);
	}
}
