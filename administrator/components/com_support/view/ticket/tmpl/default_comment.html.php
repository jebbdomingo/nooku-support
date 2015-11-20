<?
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */
?>

<ktml:script src="media://com_comments/js/trix.js" />

<ktml:style src="media://com_comments/css/trix.css" />

<div id="comments-comment-form">
    <form action="<?php echo route('option=com_support&view=comment&row=' . $state->row . '&table=' . $state->table); ?>" method="post">
        <input type="hidden" name="row" value="<?php echo $state->row; ?>" />
        <input type="hidden" name="table" value="<?php echo $state->table; ?>" />

        <input id="x" type="hidden" name="text">
        <trix-editor input="x" placeholder="<?php echo translate('Add new comment here ...') ?>"></trix-editor>

        <br />
        
        <input class="button" type="submit" value="<?= translate('Submit') ?>"/>
    </form>
</div>