<div class="passengers view">
<h2><?php echo __('Passenger'); ?></h2>
	<dl>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($passenger['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $passenger['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tour Code'); ?></dt>
		<dd>
			<?php echo h($passenger['Passenger']['tour_code']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Passenger'), array('action' => 'edit', $passenger['Passenger']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Passenger'), array('action' => 'delete', $passenger['Passenger']['id']), null, __('Are you sure you want to delete # %s?', $passenger['Passenger']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Passengers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Passenger'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
