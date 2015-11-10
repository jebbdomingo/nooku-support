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

<? // Title field ?>
<div class="support_grid">
    <div class="control-group support_grid__ticket two-thirds">
        <label class="control-label" for="support_form_title"><?= translate('Title') ?></label>
        <div class="controls">
            <div class="input-group">
                <input required class="input-group-form-control" id="support_form_title" type="text" name="title" maxlength="255"
                       value="<?= escape($ticket->title); ?>" />
            </div>
        </div>
    </div>
</div>