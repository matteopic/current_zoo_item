<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
if(!$this->checkPosition('downloads'))return;

$content = trim($this->renderPosition('downloads'));
if($content == "")return;
?>
<div><?php echo $content; ?></div>
