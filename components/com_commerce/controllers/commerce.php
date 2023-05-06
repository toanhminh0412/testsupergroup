<?php
/**
 * @package    hubzero-cms
 * @copyright  Copyright (c) 2005-2020 The Regents of the University of California.
 * @license    http://opensource.org/licenses/MIT MIT
 */

namespace Components\Commerce\Site\Controllers;

use Hubzero\Component\SiteController;

/**
 * Commerce controller for time component
 */
class Commerce extends SiteController
{
	/**
	 * Default view function
	 *
	 * @return  void
	 */
	public function displayTask()
	{

		$this->view->display();
	}
}