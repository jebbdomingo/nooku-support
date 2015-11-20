<?= helper('behavior.koowa'); ?>

<ktml:style src="media://koowa/com_koowa/css/koowa.css" />
<ktml:module position="toolbar">
    <ktml:toolbar type="actionbar" icon="task-add icon-pencil-2">
</ktml:module>

<form action="<?= route('id='.$ticket->id) ?>" method="post" class="-koowa-form">
    <div>
        <div>
            <input type="text" name="title" id="title" size="40" maxlength="255" value="<?= $ticket->title; ?>" placeholder="<?= translate( 'Title' ); ?>" />
        </div>
        <?= helper('editor.display', array(
            'name' => 'description',
            'id' => 'description',
            'width' => '100%',
            'height' => '300',
            'cols' => '60',
            'rows' => '20',
            'value' => $ticket->description
        )) ?>
        <div>
            <?php echo helper('status.listbox', array('name' => 'status', 'selected' => $ticket->status)) ?>
        </div>
    </div>
</form>

<div class="comments">
    <h2>Comments</h2>
    <?php echo @import('com:comments.comments.list.html', array('comments' => $ticket->getComments())); ?>

    <br />

    <div>
        <?php
        echo @import('default_comment.html', array(
            'state' => (object) array(
                'table' => $ticket->getTable()->getName(),
                'row'   => $ticket->id
            )))
        ?>
    </div>
</div>