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

<?= helper('bootstrap.load', array('javascript' => true)); ?>
<?= helper('behavior.koowa'); ?>

<ktml:style src="media://koowa/com_koowa/css/admin.css" />

<ktml:module position="submenu">
    <ktml:toolbar type="menubar">
</ktml:module>

<ktml:module position="toolbar">
    <ktml:toolbar type="actionbar" title="COM_SUPPORT_SUBMENU_TICKETS" icon="task icon-stack">
</ktml:module>

<div class="support-container">
    <div class="support_admin_list_grid">
        <form action="" method="get" class="-koowa-grid">
            <div class="scopebar">
                <div class="scopebar-group last hidden-tablet hidden-phone">
                    <?
                    $statuses = array(
                        'new'     => 'New',
                        'open'    => 'Open',
                        'pending' => 'Pending',
                        'solved'  => 'Solved'
                    );
                    ?>
                    <? foreach ($statuses as $key => $label): ?>
                        <a class="<?= parameters()->status == $key ? 'active' : ''; ?>"
                            href="<?= route('status='.$key) ?>">
                            <?= translate($label) ?>
                        </a>
                    <? endforeach; ?>
                </div>
                <div class="scopebar-search">
                    <?= helper('grid.search', array('submit_on_clear' => true)) ?>
                </div>
            </div>
            <div class="todo_table_container">
                <table class="table table-striped footable">
                    <thead>
                        <tr>
                            <th style="text-align: center;" width="1">
                                <?= helper('grid.checkall')?>
                            </th>
                            <th class="todo_table__title_field">
                                <?= helper('grid.sort', array('column' => 'title', 'title' => 'Title')); ?>
                            </th>
                            <th data-hide="phone,phablet">
                                <?= helper('grid.sort', array('column' => 'description', 'title' => 'Description')); ?>
                            </th>
                        </tr>
                    </thead>
                    <? if (count($tickets)): ?>
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <?= helper('paginator.pagination') ?>
                                </td>
                            </tr>
                        </tfoot>
                    <? endif; ?>
                    <tbody>
                        <? foreach ($tickets as $ticket): ?>
                            <tr>
                                <td style="text-align: center;">
                                    <?= helper('grid.checkbox', array('entity' => $ticket)) ?>
                                </td>
                                <td class="todo_table__title_field">
                                    <a href="<?= route('view=ticket&id='.$ticket->id); ?>">
                                        <?= escape($ticket->title); ?></a>
                                </td>
                                <td>
                                    <?= $ticket->description; ?>
                                </td>
                            </tr>
                        <? endforeach; ?>

                        <? if (!count($tickets)): ?>
                            <tr>
                                <td colspan="9" align="center" style="text-align: center;">
                                    <?= translate('No tickets found.') ?>
                                </td>
                            </tr>
                        <? endif; ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>