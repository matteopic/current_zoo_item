<?php 
// no direct access
defined('_JEXEC') or die('Restricted access');

$subCategories = $category->getChildren( false );
$items = $category->getItems( true );
?>
<h3><?php echo $category->name; ?></h3>
<ul>
<?php foreach($subCategories as $cat){
	if(!$cat->isPublished()) continue;
	$catHref = JRoute::_($zoo->route->category($cat));
	?><li><a href="<?php echo $catHref; ?>"><?php echo $cat->name; ?></a></li><?php
}
?>
</ul>
<?php 
//var_dump($params);
// TODO populate params 
//$params->set('theme', 'list');
//$params->setValue('layout', '')
//$params->setValue('media_position', '')
//$params->setValue('mode', '')
//$params->setValue('type', '')
$params->set('application', $category->application_id);
$params->set('category', $category->id);
//$params->setValue('item_id', '')
//$params->setValue('subcategories', '')
//$params->setValue('count', '')
//$params->setValue('order', '')
$items = $zoo->module->getItems($params);

$layout = $params->get('layout', 'default');
include JModuleHelper::getLayoutPath('mod_current_zoo_item', $params->get('theme', 'list'));
?>
