<?php
class ComSupportDispatcherHttp extends ComKoowaDispatcherHttp
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'controller' => 'ticket'
        ));
        
        parent::_initialize($config);
    }
}