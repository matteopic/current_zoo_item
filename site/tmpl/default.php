<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<?php if (!empty($items)) : ?>

<ul class="zoo-item-list zoo-list">
	<?php $i = 0; foreach ($items as $item) : ?>
	<li><?php echo $renderer->render('item.'.$layout, compact('item', 'params')); ?></li>
	<?php $i++; endforeach; ?>
</ul>

<?php else : ?>
<?php echo JText::_('COM_ZOO_NO_ITEMS_FOUND'); ?>
<?php endif; ?>