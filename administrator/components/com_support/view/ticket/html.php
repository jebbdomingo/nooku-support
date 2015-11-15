<?php
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */

/**
 * Ticket View
 *
 * @author  Jebb Domingo <jebb@wizmedia.net>
 * @package Nooku\Component\Support
 */

class ComSupportViewTicketHtml extends KViewHtml
{
	/**
     * Initializes the config for the object
     *
     * Called from {@link __construct()} as a first step of object instantiation.
     *
     * @param   KObjectConfig $config Configuration options
     * @return  void
     */
    public function __construct(KObjectConfig $config)
    {
        parent::__construct($config);

        $this->_data['user'] = $this->getObject('user');
    }
}
