<div class="routeTowns index">
	<h2><?php echo __('Route Towns'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('route_id'); ?></th>
			<th><?php echo $this->Paginator->sort('town_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($routeTowns as $routeTown): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($routeTown['Route']['name'], array('controller' => 'routes', 'action' => 'view', $routeTown['Route']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($routeTown['Town']['name'], array('controller' => 'towns', 'action' => 'view', $routeTown['Town']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $routeTown['RouteTown']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $routeTown['RouteTown']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $routeTown['RouteTown']['id']), null, __('Are you sure you want to delete # %s?', $routeTown['RouteTown']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Route Town'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Towns'), array('controller' => 'towns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('controller' => 'towns', 'action' => 'add')); ?> </li>
	</ul>
</div>
