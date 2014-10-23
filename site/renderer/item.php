<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

$renderer = $zoo->renderer->create('item')->addPath(array($zoo->path->path('component.site:'), dirname(__FILE__)));
$layout = $params->get('layout', 'default');
include JModuleHelper::getLayoutPath('mod_current_zoo_item', $params->get('theme', 'list'));
?>