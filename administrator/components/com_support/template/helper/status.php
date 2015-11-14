<?php
/**
 * Ticket Status - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2007 - 2014 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/nooku-support for the canonical source repository
 */

/**
 * Statuses Template Helper
 *
  * @package Support
 */
class ComSupportTemplateHelperStatus extends KTemplateHelperAbstract
{
    /**
     * Generates status filter buttons
     *
     * @todo rename to display_filters, add display_menu
     *
     * @param array $config
     *
     * @return  string  Html
     */
    public function display(array $config)
    {
        $status = $this->getConfig()->status;

        if ($config['status']) {
            $status = $this->getConfig()->status->merge($config['status']);
        }

        $result = '';
        
        foreach ($status as $key => $label) {
            $class = ($config['active_status'] == $key) ? 'class="active"' : null;
            $href  = ($config['active_status'] <> $key) ? 'href="' . $this->getTemplate()->route("status={$key}") . '"' : null;
            $label = $this->getObject('translator')->translate($label);

            $result .= "<a {$class} {$href}>{$label}</a>";
        }

        return $result;
    }
}
