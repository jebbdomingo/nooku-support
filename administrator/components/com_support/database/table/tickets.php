<?php
class ComSupportDatabaseTableTickets extends KDatabaseTableAbstract
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
        	'behaviors' => array('com:comments.database.behavior.commentable'),
            'filters' => array(
                'description'  => array('trim', 'html')
            )
        ));
        parent::_initialize($config);
    }
}