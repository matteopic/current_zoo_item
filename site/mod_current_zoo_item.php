<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

$menu = JSite::getMenu()->getItem( JRequest::getInt('Itemid') );
if(!$menu) return;

$view = JRequest::getString("view");
if(!$view) $view = JRequest::getString("task");
if(!$view) return;

// load config
require_once(JPATH_ADMINISTRATOR.'/components/com_zoo/config.php');

// get app
$zoo = App::getInstance('zoo');

// load zoo frontend language file
$zoo->system->language->load('com_zoo');

// init vars
$path = dirname(__FILE__);

//register base path
$zoo->path->register($path, 'mod_current_zoo_item');
$renderer = $zoo->renderer->create('item')->addPath(array($zoo->path->path('component.site:'), dirname(__FILE__)));
if($view == 'item'){
	$id = $menu->params->get('item_id');
	if(!$id && JRequest::getString ("task") == 'item')$id = JRequest::getString ("item_id");
	if(!$id)return;

	$items = array();
	$items[] = $zoo->table->item->get($id);
	$layout = $params->get('layout', 'default');
	include JModuleHelper::getLayoutPath('mod_current_zoo_item', $params->get('theme', 'list'));
}
else if($view == 'category'){
	$id = $menu->params->get('category');

	$category = $zoo->table->category->get($id);
	include 'renderer/category.php';
	//include JModuleHelper::getLayoutPath('mod_current_zoo_item', $params->get('category_theme', 'category'));
}
else if($view == 'submission'){
	// TODO
}
