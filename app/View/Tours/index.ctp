<div class="tours index">
	<h2><?php echo __('Tours'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('tour_code'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('driver_id'); ?></th>
			<th><?php echo $this->Paginator->sort('route_id'); ?></th>
			<th><?php echo $this->Paginator->sort('coach_id'); ?></th>
			<th><?php echo $this->Paginator->sort('executed'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tours as $tour): ?>
	<tr>
		<td><?php echo h($tour['Tour']['tour_code']); ?>&nbsp;</td>
		<td><?php echo h($tour['Tour']['start_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tour['Driver']['name'], array('controller' => 'drivers', 'action' => 'view', $tour['Driver']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tour['Route']['name'], array('controller' => 'routes', 'action' => 'view', $tour['Route']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tour['Coach'][''], array('controller' => 'coaches', 'action' => 'view', $tour['Coach']['id'])); ?>
		</td>
		<td><?php echo h($tour['Tour']['executed']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tour['Tour']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tour['Tour']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tour['Tour']['id']), null, __('Are you sure you want to delete # %s?', $tour['Tour']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tour'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coaches'), array('controller' => 'coaches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coach'), array('controller' => 'coaches', 'action' => 'add')); ?> </li>
	</ul>
</div>
