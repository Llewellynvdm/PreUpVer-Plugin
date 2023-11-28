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

/**
 * System - PreUpVerLoader script file.
 *
 * @package PlgSystemPreUpVerLoader
 */
class plgSystemPreUpVerLoaderInstallerScript
{

	/**
	 * Called before any type of action
	 *
	 * @param   string  $route  Which action is happening (install|uninstall|discover_install|update)
	 * @param   Joomla\CMS\Installer\InstallerAdapter  $adapter  The object responsible for running this script
	 *
	 * @return  boolean  True on success
	 */
	public function preflight($route, $adapter)
	{
		// get application
		$app = JFactory::getApplication();

		// the default for both install and update
		$jversion = new JVersion();
		if (!$jversion->isCompatible('3.8.0'))
		{
			$app->enqueueMessage('Please upgrade to at least Joomla! 3.8.0 before continuing!', 'error');
			return false;
		}

		if ('install' === $route)
		{
			$jversion = new JVersion();
			if (!$jversion->isCompatible('3.10.0')) {
				$app->enqueueMessage('Please upgrade to at least Joomla! 3.10 before continuing!', 'error');
				return false;
			}

		}

		return true;
	}
}
