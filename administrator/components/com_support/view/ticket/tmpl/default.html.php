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
            <?
            /**
             * @todo can we somehow place this array to a component's configuration so that it can be used in different places? 
             */
            $statuses = array(
                'all'     => 'All',
                'new'     => 'New',
                'open'    => 'Open',
                'pending' => 'Pending',
                'solved'  => 'Solved'
            );
            ?>
            <select name="status">
                <? foreach ($statuses as $key => $label): ?>
                    <option value="<?= $key ?>" <?= ($ticket->status == $key ? 'selected="selected"' : '') ?>><?= $label ?></option>
                <? endforeach; ?>
            </select>
        </div>
    </div>
</form>

<div class="comments">
    <? foreach($ticket->getComments() as $comment) : ?>
    <div class="comment comment_<?= $comment->id ?>">
        <strong><?php echo $comment->created_by == $user->getId() ? translate('You') : $comment->created_by_name ?></strong>
        <span class="muted">
            <?= helper('date.format', array('date'=> $comment->created_on, 'format' => 'd F Y H:i')) ?>
        </span>
        <div class="comment_text">
            <?= $comment->text ?>
        </div>
        <? if($comment->isAttachable()) : ?>
            <?= import('default_attachments.html', array('attachments' => $comment->getAttachments())) ?>
        <? endif ?>
    </div>
    <? endforeach; ?>

    <div class="comment">
        <strong><?php echo $ticket->created_by == $user->getId() ? translate('You') : $ticket->created_by_name ?></strong>
        <span class="muted">
            <?= helper('date.format', array('date'=> $ticket->created_on, 'format' => 'd F Y H:i')) ?>
        </span>
        <?= $ticket->text ?>
        <? if($ticket->isAttachable()) : ?>
            <?= import('default_attachments.html', array('attachments' => $ticket->getAttachments())) ?>
        <? endif ?>
    </div>

    <div>
        <?php
        echo @import('com:comments.comment.default.html', array(
            'state' => (object) array(
                'table' => $ticket->getTable()->getName(),
                'row'   => $ticket->id
            )))
        ?>
    </div>
</div>