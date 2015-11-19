<?php
/**
 * Ticket Status - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2007 - 2014 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/nooku-support for the canonical source repository
 */

/**
 * Status Template Helper
 *
  * @package Support
 */
class ComSupportTemplateHelperStatus extends KTemplateHelperListbox
{
    /**
     * Generates status list box
     * 
     * @param array $config [optional]
     * 
     * @return html
     */
    public function listbox(array $config = array())
    {
        $config = new KObjectConfig($config);
        $config->append(array(
            'options' => $this->getConfig()->status,
            'filter'  => array()
        ));

        return parent::optionlist($config);
    }

    /**
     * Generates status filter buttons
     *
     * @param array $config [optional]
     *
     * @return  string  html
     */
    public function filterButtons(array $config = array())
    {
        $status = $this->getConfig()->status;

        if ($config['status']) {
            $status = $this->getConfig()->status->merge($config['status']);
        }

        $result = '';
        foreach ($status as $row) {
            $value = $row['value'];
            $label = $row['label'];
            $class = ($config['active_status'] == $value) ? 'class="active"' : null;
            $href  = ($config['active_status'] <> $value) ? 'href="' . $this->getTemplate()->route("status={$value}") . '"' : null;
            $label = $this->getObject('translator')->translate($label);

            $result .= "<a {$class} {$href}>{$label}</a>";
        }

        return $result;
    }
}
