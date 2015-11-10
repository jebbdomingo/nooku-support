<?php
class ComSupportDatabaseTableTickets extends KDatabaseTableAbstract
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'filters' => array(
                'description'  => array('trim', 'html')
            )
        ));
        parent::_initialize($config);
    }
}