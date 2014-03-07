<div class="coaches form">
<?php echo $this->Form->create('Coach'); ?>
	<fieldset>
		<legend><?php echo __('Add Coach'); ?></legend>
	<?php
		echo $this->Form->input('reg_no');
		echo $this->Form->input('capacity');
		echo $this->Form->input('last_service_date');
		echo $this->Form->input('last_service_mileage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Coaches'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add')); ?> </li>
	</ul>
</div>
