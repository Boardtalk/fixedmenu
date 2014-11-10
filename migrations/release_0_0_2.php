<?php
/**
*
* @package phpBB Extension - Boardtalk Fixed Menu
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace boardtalk\fixedmenu\migrations;

class release_0_0_2 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\boardtalk\fixedmenu\migrations\release_0_0_1');
	}
	public function update_data()
	{
		return array(
			array('config.add', array('boardtalk_fixedmenu_type', 0)),
		);
	}
	
}
