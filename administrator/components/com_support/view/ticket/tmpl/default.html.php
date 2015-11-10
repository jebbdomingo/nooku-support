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
            $statuses = array(
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