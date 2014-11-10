<?php
/**
*
* @package phpBB Extension - Boardtalk Fixed Menu
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace boardtalk\fixedmenu\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class main_listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'						=> 'load_language_on_setup',
			'core.page_header'						=> 'add_fixedmenu_options',			
		);
	}


 /* @var \phpbb\controller\helper */
  protected $helper;

  /* @var \phpbb\template\template */
  protected $template;
  protected $config;
  /**
  * Constructor
  *
  * @param \phpbb\controller\helper $helper   Controller helper object
  * @param \phpbb\template      $template Template object
  */
  public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\config\config $config)
  {
    $this->config = $config;
    $this->helper = $helper;
    $this->template = $template;
  }

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'boardtalk/fixedmenu',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_fixedmenu_options($event)
	{

		global $config, $user, $table_prefix;
 	
		$this->template->assign_vars(array(
			  'S_FIXEDMENU_TYPE'   => $config['boardtalk_fixedmenu_type'],
		));
	}
}
