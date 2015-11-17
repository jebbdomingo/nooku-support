<?php

/**
 * Support - a Joomla example extension built with Nooku Framework.
 *
 * @package     Support
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-support for the canonical source repository
 */
class ComSupportDatabaseTableTickets extends KDatabaseTableAbstract
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'behaviors' => array('com:comments.database.behavior.commentable'),
            'filters'   => array(
                'description' => array('trim', 'html')
            )
        ));
        
        parent::_initialize($config);
    }
}
