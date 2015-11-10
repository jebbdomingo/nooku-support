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

<ktml:style src="media://koowa/com_koowa/css/site.css" />

<div class="support_ticket">
    <h4 class="koowa_header">
        <? // Header title ?>
        <span class="koowa_header__ticket">
            <a class="koowa_header__title_link" href="<?= route('view=ticket&id='.$ticket->id); ?>">
                <?= escape($ticket->title); ?>
            </a>
         </span>
    </h4>
    <div class="ticket_description">
        <?= JHtml::_('content.prepare', $ticket->description); ?>
    </div>

    <br />

</div>