<?php
/**
* @package   ZOO Item
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
if(!$this->checkPosition('links'))return;

$content = trim($this->renderPosition('links'));
if($content == "")return;
?>
<div><?php echo $content; ?></div>
