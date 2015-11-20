<?php

/**
 * Support - a Joomla example extension built with Nooku Framework.
 *
 * @package     Support
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/nooku-support for the canonical source repository
 */

return array(
	'identifiers' => array(
		'com://admin/support.template.helper.status' => array(
		    'status' => array(
                array('label' => 'All', 'value' => 'all'),
                array('label' => 'New', 'value' => 'new'),
                array('label' => 'Open', 'value' => 'open'),
                array('label' => 'Pending', 'value' => 'pending'),
                array('label' => 'Solved', 'value' => 'solved')
            )
		),
		'com://admin/support.controller.ticket' => array(
            'behaviors' => array(
                'com:activities.controller.behavior.loggable'
            )
        )
	),

	'aliases' => array()
);
