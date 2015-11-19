<?
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */
?>

<div id="comments-comment-form">
    <form action="<?php echo route('option=com_support&view=comment'); ?>" method="post">
        <input type="hidden" name="row" value="<?php echo $state->row; ?>" />
        <input type="hidden" name="table" value="<?php echo $state->table; ?>" />

        <textarea type="text" name="text" placeholder="<?= translate('Add new comment here ...') ?>" id="new-comment-text"></textarea>
        <br />
        <input class="button" type="submit" value="<?= translate('Submit') ?>"/>
    </form>
</div>