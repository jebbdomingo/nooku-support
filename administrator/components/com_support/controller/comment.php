<?php
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */


/**
 * Comment Controller
 *
 * @author  Jebb Domingo <http://github.com/jebbdomingo>
 * @package Koowa\Component\Comments
 */
class ComSupportControllerComment extends ComCommentsControllerComment
{
    public function getRequest()
    {
        $request = parent::getRequest();

        $request->data->table  = $request->data->table . '_tickets';
        $request->query->table = $request->data->table;

        return $request;
    }
}