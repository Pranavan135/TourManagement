<div class="bills form">
<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bill'); ?></legend>
	<?php
		echo $this->Form->input('ref_no');
		echo $this->Form->input('tour_code');
		echo $this->Form->input('town_id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('bill_date');
		echo $this->Form->input('number_of_individuals');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bill.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Bill.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bills'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Towns'), array('controller' => 'towns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('controller' => 'towns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
