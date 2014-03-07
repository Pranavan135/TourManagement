<div class="routeTowns form">
<?php echo $this->Form->create('RouteTown'); ?>
	<fieldset>
		<legend><?php echo __('Edit Route Town'); ?></legend>
	<?php
		echo $this->Form->input('route_id');
		echo $this->Form->input('town_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RouteTown.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RouteTown.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Route Towns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Towns'), array('controller' => 'towns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('controller' => 'towns', 'action' => 'add')); ?> </li>
	</ul>
</div>
