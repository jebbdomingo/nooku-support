<?
/**
 * Support - a Joomla example extension built with Nooku Framework.
 *
 * @package     Support
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-support for the canonical source repository
 */
defined('KOOWA') or die; ?>

<? // Description field ?>
<div class="support_grid description_container">
    <div class="control-group support_grid__ticket one-whole">
        <div class="controls">
            <?= helper('editor.display', array(
                'name' => 'description',
                'value' => $ticket->description,
                'id'   => 'description',
                'width' => '100%',
                'height' => '341',
                'cols' => '100',
                'rows' => '20',
                'buttons' => array('pagebreak')
            )); ?>
        </div>
    </div>
</div>