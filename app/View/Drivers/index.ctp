<div class="drivers index">
	<h2><?php echo __('Drivers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('tp_no'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($drivers as $driver): ?>
	<tr>
		<td><?php echo h($driver['Driver']['id']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['name']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['address']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['tp_no']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $driver['Driver']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $driver['Driver']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $driver['Driver']['id']), null, __('Are you sure you want to delete # %s?', $driver['Driver']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Driver'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Driver Routes'), array('controller' => 'driver_routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Route'), array('controller' => 'driver_routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add')); ?> </li>
	</ul>
</div>
