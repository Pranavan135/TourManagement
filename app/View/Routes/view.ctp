<div class="routes view">
<h2><?php echo __('Route'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($route['Route']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($route['Route']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Days'); ?></dt>
		<dd>
			<?php echo h($route['Route']['days']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distance'); ?></dt>
		<dd>
			<?php echo h($route['Route']['distance']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Route'), array('action' => 'edit', $route['Route']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Route'), array('action' => 'delete', $route['Route']['id']), null, __('Are you sure you want to delete # %s?', $route['Route']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Route Towns'), array('controller' => 'route_towns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route Town'), array('controller' => 'route_towns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Route Towns'); ?></h3>
	<?php if (!empty($route['RouteTown'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Route Id'); ?></th>
		<th><?php echo __('Town Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($route['RouteTown'] as $routeTown): ?>
		<tr>
			<td><?php echo $routeTown['route_id']; ?></td>
			<td><?php echo $routeTown['town_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'route_towns', 'action' => 'view', $routeTown['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'route_towns', 'action' => 'edit', $routeTown['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'route_towns', 'action' => 'delete', $routeTown['id']), null, __('Are you sure you want to delete # %s?', $routeTown['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Route Town'), array('controller' => 'route_towns', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tours'); ?></h3>
	<?php if (!empty($route['Tour'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Tour Code'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('Driver Id'); ?></th>
		<th><?php echo __('Route Id'); ?></th>
		<th><?php echo __('Coach Id'); ?></th>
		<th><?php echo __('Executed'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($route['Tour'] as $tour): ?>
		<tr>
			<td><?php echo $tour['tour_code']; ?></td>
			<td><?php echo $tour['start_date']; ?></td>
			<td><?php echo $tour['driver_id']; ?></td>
			<td><?php echo $tour['route_id']; ?></td>
			<td><?php echo $tour['coach_id']; ?></td>
			<td><?php echo $tour['executed']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tours', 'action' => 'view', $tour['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tours', 'action' => 'edit', $tour['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tours', 'action' => 'delete', $tour['id']), null, __('Are you sure you want to delete # %s?', $tour['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
