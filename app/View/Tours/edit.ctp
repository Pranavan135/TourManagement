<div class="tours form">
<?php echo $this->Form->create('Tour'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tour'); ?></legend>
	<?php
		echo $this->Form->input('tour_code');
		echo $this->Form->input('start_date');
		echo $this->Form->input('driver_id');
		echo $this->Form->input('route_id');
		echo $this->Form->input('coach_id');
		echo $this->Form->input('executed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tour.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tour.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tours'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coaches'), array('controller' => 'coaches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coach'), array('controller' => 'coaches', 'action' => 'add')); ?> </li>
	</ul>
</div>
