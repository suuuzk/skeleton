<?php
/**
 * @package    spcore
 * @version    1.0
 * @author     funayose yoshito
 * @license    MIT License
 * @copyright  SP advertising Co., Ltd
 * @link       http://www.sp-k.co.jp
 */

/**
 * View class
 *
 * fuel/coreの拡張クラス
 * 
 * Acts as an object wrapper for HTML pages with embedded PHP, called "views".
 * Variables can be assigned with the view object and referenced locally within
 * the view.
 */
class View extends Fuel\Core\View 
{
	/**
	 * @var  array  Global view data
	 */
	protected $test = array();

	/**
	 * debug
	 *
	 * @return  void
	 */
	public static function debug()
	{
		var_dump('in spcore');
	}
}