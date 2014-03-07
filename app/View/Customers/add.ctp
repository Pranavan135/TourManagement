<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Passengers'), array('controller' => 'passengers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Passenger'), array('controller' => 'passengers', 'action' => 'add')); ?> </li>
	</ul>
</div>
