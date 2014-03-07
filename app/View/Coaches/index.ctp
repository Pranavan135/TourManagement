<div class="coaches index">
	<h2><?php echo __('Coaches'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('reg_no'); ?></th>
			<th><?php echo $this->Paginator->sort('capacity'); ?></th>
			<th><?php echo $this->Paginator->sort('last_service_date'); ?></th>
			<th><?php echo $this->Paginator->sort('last_service_mileage'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($coaches as $coach): ?>
	<tr>
		<td><?php echo h($coach['Coach']['reg_no']); ?>&nbsp;</td>
		<td><?php echo h($coach['Coach']['capacity']); ?>&nbsp;</td>
		<td><?php echo h($coach['Coach']['last_service_date']); ?>&nbsp;</td>
		<td><?php echo h($coach['Coach']['last_service_mileage']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coach['Coach']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coach['Coach']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coach['Coach']['id']), null, __('Are you sure you want to delete # %s?', $coach['Coach']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Coach'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add')); ?> </li>
	</ul>
</div>
