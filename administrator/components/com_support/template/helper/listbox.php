<?php
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2007 - 2014 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/nooku-framework for the canonical source repository
 */

/**
 * Listbox Helper
 *
 * @author  Jebb Domingo <http://github.com/jebbdomingo>
 * @package Koowa\Component\Support
 */
class ComSupportTemplateHelperListbox extends KTemplateHelperListbox
{
    /**
     * @param array $config
     * @return string
     */
    public function status($config = array())
    {
        $config = new KObjectConfig($config);

        $data = [];
        foreach ($this->getConfig('com://admin/support.template.helper.status')->status as $value => $label) {
            $data[] = ['label' => $label, 'value' => $value];
        }

        $config->append(array(
            'options' => $data,
            'filter'  => array()
        ));

        return parent::optionlist($config);
    }
}
