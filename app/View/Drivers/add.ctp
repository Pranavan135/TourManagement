<div class="drivers form">
<?php echo $this->Form->create('Driver'); ?>
	<fieldset>
		<legend><?php echo __('Add Driver'); ?></legend>
	<?php
                echo $this->Form->input('<b> Id</b>',array('type' => 'int'));
		echo $this->Form->input('<b> Name</b>');
		echo $this->Form->input('<b> Address</b>');
		echo $this->Form->input('<b> Telephone No</b>');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Drivers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Driver Routes'), array('controller' => 'driver_routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Route'), array('controller' => 'driver_routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add')); ?> </li>
	</ul>
</div>
