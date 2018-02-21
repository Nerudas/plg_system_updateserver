<?php
/**
 * @package    System - Update Server Plugin
 * @version    1.0.0
 * @author     Nerudas  - nerudas.ru
 * @copyright  Copyright (c) 2013 - 2018 Nerudas. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link       https://nerudas.ru
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;

class plgSystemUpdateServer extends CMSPlugin
{
	/**
	 * Set Redirects
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onAfterRoute()
	{
		$app = Factory::getApplication();
		if ($app->isSite() && !empty($this->params->get('redirect', '')) && $app->input->get('option') !== 'com_updateserver')
		{
			$app->redirect($this->params->get('redirect'), true);
		}
	}
}