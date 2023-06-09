<?php
/**
 * @package    hubzero-cms
 * @copyright  Copyright (c) 2005-2020 The Regents of the University of California.
 * @license    http://opensource.org/licenses/MIT MIT
 */

namespace Components\Commerce\Site;

use Hubzero\Component\Router\Base;

/**
 * Routing class for the component
 */
class Router extends Base
{
	/**
	 * Build the route for the component
	 *
	 * @param   array  &$query  An array of URL arguments
	 * @return  array
	 */
	public function build(&$query)
	{
		$segments = array();

		// if (!empty($query['controller']))
		// {
		// 	$segments[] = $query['controller'];
		// 	unset($query['controller']);
		// }
		if (!empty($query['task']))
		{
			$segments[] = $query['task'];
			unset($query['task']);
		}
		if (!empty($query['id']))
		{
			$segments[] = $query['id'];
			unset($query['id']);
		}

		return $segments;
	}

	/**
	 * Parse the segments of a URL
	 *
	 * @param   array  &$segments  The segments of the URL to parse.
	 * @return  array
	 */
	public function parse(&$segments)
	{
		$vars = array();

		if (empty($segments))
		{
			return $vars;
		}

		// if (isset($segments[0]))
		// {
		// 	$vars['controller'] = $segments[0];
		// }
		if (isset($segments[1]))
		{
			$vars['task'] = $segments[1];
		}
		if (isset($segments[2]))
		{
			$vars['id'] = $segments[2];
		}

		return $vars;
	}
}