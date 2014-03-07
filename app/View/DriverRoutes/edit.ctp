<div class="driverRoutes form">
<?php echo $this->Form->create('DriverRoute'); ?>
	<fieldset>
		<legend><?php echo __('Edit Driver Route'); ?></legend>
	<?php
		echo $this->Form->input('route_id');
		echo $this->Form->input('driver_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DriverRoute.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DriverRoute.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Driver Routes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
	</ul>
</div>
