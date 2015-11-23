/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */

-- --------------------------------------------------------
--
-- Table structure for table `#__support_tickets`
--

CREATE TABLE IF NOT EXISTS `#__support_tickets` (
  `support_ticket_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  UNIQUE KEY `support_ticket_id` (`support_ticket_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `#__support_tickets`
--

INSERT INTO `#__support_tickets` (`support_ticket_id`, `title`, `description`, `status`) VALUES
(1, 'Support Ticket One', '<p>This is the first support <strong>ticket</strong></p>', 'open'),
(2, 'Support Ticket Two', 'This is the second support ticket', 'new'),
(3, 'Support Ticket Three', 'This is the third support ticket', 'new');