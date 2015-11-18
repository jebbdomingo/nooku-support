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
                'all'     => 'All',
                'new'     => 'New',
                'open'    => 'Open',
                'pending' => 'Pending',
                'solved'  => 'Solved'
		    )
		),
		'com://admin/support.controller.ticket' => array(
            'behaviors' => array(
                'com:activities.controller.behavior.loggable',
                'com:comments.controller.behavior.commentable'
            )
        )
	),

	'aliases' => array()
);