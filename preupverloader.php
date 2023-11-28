<?php
/**
 * @package    Octoleo
 *
 * @created    17th February, 2023
 * @author     Llewellyn van der Merwe <https://git.vdm.dev/Llewellyn>
 * @copyright  Copyright (C) 2022. All Rights Reserved
 * @license    GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Joomla Extension
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Html\HTMLHelper;

/**
 * System - PreUpVerLoader plugin.
 *
 * @package   PreUpVerLoader
 * @since     1.0.0
 */
class PlgSystemPreUpVerLoader extends CMSPlugin
{
	/**
	 * Application object
	 *
	 * @var    CMSApplication
	 * @since  1.0.0
	 */
	protected  $app;

	/**
	 * This method is called before the head is compiled and allows manipulation of the head data.
	 * In this case, it's used to add a JavaScript file to the front end of the Joomla site.
	 *
	 * @return  void
	 *
	 * @since   3.0.0
	 * @throws  Exception on error.
	 */
	public function onBeforeCompileHead()
	{
		// Check if we are in the site application
		if ($this->app->isClient('site')) {
			HTMLHelper::_('script', 'https://cdn.jsdelivr.net/gh/Llewellynvdm/PreUpVer@1.0.0/dist/js/preupver.min.js', ['version' => 'auto']);
		}
	}
}
