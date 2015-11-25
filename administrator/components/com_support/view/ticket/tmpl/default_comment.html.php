<?
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 *
 * @todo make the comments list and form to use Ajax
 */
?>

<div id="comments-comment-form">
    <form action="<?php echo route('option=com_support&view=comment&row=' . $state->row . '&table=' . $state->table); ?>" method="post">
        <input type="hidden" name="row" value="<?php echo $state->row; ?>" />
        <input type="hidden" name="table" value="<?php echo $state->table; ?>" />

        <?php echo helper('editor.display', array(
            'editor' => 'com:ckeditor.controller.editor',
            'name'   => 'text'
        )) ?>

        <br />
        
        <input class="button" type="submit" value="<?= translate('Submit') ?>"/>
    </form>
</div>