<?php
/**
 * Todo - a Joomla example extension built with Nooku Framework.
 *
 * @package     Todo
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-todo for the canonical source repository
 */
defined('_JEXEC') or die;
if (!class_exists('Koowa')) {
    return;
}

try {
	KObjectManager::getInstance()->getObject('com://admin/support.dispatcher.http')->dispatch();
} catch(Exception $exception) {
    KObjectManager::getInstance()->getObject('exception.handler')->handleException($exception);
}