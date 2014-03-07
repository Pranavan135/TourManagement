<div class="driverRoutes index">
	<h2><?php echo __('Driver Routes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('route_id'); ?></th>
			<th><?php echo $this->Paginator->sort('driver_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($driverRoutes as $driverRoute): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($driverRoute['Route']['name'], array('controller' => 'routes', 'action' => 'view', $driverRoute['Route']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($driverRoute['Driver']['name'], array('controller' => 'drivers', 'action' => 'view', $driverRoute['Driver']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $driverRoute['DriverRoute']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $driverRoute['DriverRoute']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $driverRoute['DriverRoute']['id']), null, __('Are you sure you want to delete # %s?', $driverRoute['DriverRoute']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Driver Route'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
	</ul>
</div>
