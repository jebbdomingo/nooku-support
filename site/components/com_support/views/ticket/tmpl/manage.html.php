<?
/**
 * Support - a Joomla example extension built with Nooku Framework.
 *
 * @package     Support
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-support for the canonical source repository
 */
defined('KOOWA') or die;

$button_size   = 'btn-small';
?>

<div class="btn-toolbar koowa_toolbar">
    <div class="btn-group">
        <? // Edit ?>
        <a class="btn <?= $button_size ?>"
               href="<?= route('view=ticket&id='.$ticket->id.'&layout=form');?>"
            ><?= translate('Edit'); ?></a>
    </div>
</div>