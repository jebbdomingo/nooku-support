<?php

/**
 * Support - a Joomla example extension built with Nooku Framework.
 *
 * @package     Support
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-support for the canonical source repository
 */
class ComSupportModelTickets extends KModelDatabase
{
    public function __construct(KObjectConfig $config)
    {
        //echo get_class($config);die;

        parent::__construct($config);

        $this->getState()
            ->insert('status', 'string');
    }

    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'behaviors' => array(
                'searchable' => array('columns' => array('title', 'description'))
            )
        ));

        parent::_initialize($config);
    }

    protected function _buildQueryWhere(KDatabaseQueryInterface $query)
    {
        parent::_buildQueryWhere($query);

        $state = $this->getState();

        if (!is_null($state->status) && $state->status <> 'all') {
            $query->where('(tbl.status IN :status)')->bind(array('status' => (array) $state->status));
        }
    }
}
