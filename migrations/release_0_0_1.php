<?php
/**
*
* @package phpBB Extension - Boardtalk Fixed Menu
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace boardtalk\fixedmenu\migrations;

class release_0_0_1 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config_text.add', array('boardtalk_fixedmenu_font', '')),
			array('config_text.add', array('boardtalk_fixedmenu_color', '')),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_FIXEDMENU_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_FIXEDMENU_TITLE',
				array(
					'module_basename'	=> '\boardtalk\fixedmenu\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
