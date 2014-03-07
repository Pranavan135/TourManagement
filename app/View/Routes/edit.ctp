<div class="routes form">
<?php echo $this->Form->create('Route'); ?>
	<fieldset>
		<legend><?php echo __('Edit Route'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('days');
		echo $this->Form->input('distance');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Route.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Route.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Routes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Route Towns'), array('controller' => 'route_towns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route Town'), array('controller' => 'route_towns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add')); ?> </li>
	</ul>
</div>
