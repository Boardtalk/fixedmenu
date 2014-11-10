<?php
/**
*
* @package phpBB Extension - Boardtalk Fixed Menu
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace boardtalk\fixedmenu\acp;

class main_module
{
  protected $request;

	var $u_action;

	function main($id, $mode)
	{
		global $user, $auth, $template, $cache, $request, $table_prefix, $config, $phpbb_root_path, $phpbb_admin_path, $phpEx, $phpbb_container;

		$this->request = $request;
		$user->add_lang('acp/common');
		$this->tpl_name = 'fixedmenu_body';
		$this->page_title = $user->lang('ACP_FIXEDMENU_SETTINGS');
		add_form_key('boardtalk/fixedmenu');


		if ($request->is_set_post('submit_config'))
			{
				if (!check_form_key('boardtalk/fixedmenu'))
				{
				trigger_error('FORM_INVALID');
				}
				
				$config->set('boardtalk_fixedmenu_type', $request->variable('boardtalk_fixedmenu_type', 0));

				trigger_error($user->lang('ACP_FIXEDMENU_SETTING_SAVED') . adm_back_link($this->u_action));
			}

		$template->assign_vars(array(
			  'U_ACTION'					=> $this->u_action,
			  'S_FIXEDMENU_TYPE'   			=> $config['boardtalk_fixedmenu_type'],
		));
	}
}			