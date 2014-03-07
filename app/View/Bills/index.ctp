<div class="bills index">
	<h2><?php echo __('Bills'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ref_no'); ?></th>
			<th><?php echo $this->Paginator->sort('tour_code'); ?></th>
			<th><?php echo $this->Paginator->sort('town_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bill_date'); ?></th>
			<th><?php echo $this->Paginator->sort('number_of_individuals'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bills as $bill): ?>
	<tr>
		<td><?php echo h($bill['Bill']['ref_no']); ?>&nbsp;</td>
		<td><?php echo h($bill['Bill']['tour_code']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bill['Town']['name'], array('controller' => 'towns', 'action' => 'view', $bill['Town']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bill['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $bill['Hotel']['id'])); ?>
		</td>
		<td><?php echo h($bill['Bill']['bill_date']); ?>&nbsp;</td>
		<td><?php echo h($bill['Bill']['number_of_individuals']); ?>&nbsp;</td>
		<td><?php echo h($bill['Bill']['amount']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bill['Bill']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bill['Bill']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bill['Bill']['id']), null, __('Are you sure you want to delete # %s?', $bill['Bill']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bill'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Towns'), array('controller' => 'towns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('controller' => 'towns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
