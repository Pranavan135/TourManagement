<div class="drivers view">
<h2><?php echo __('Driver'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tp No'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['tp_no']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Driver'), array('action' => 'edit', $driver['Driver']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Driver'), array('action' => 'delete', $driver['Driver']['id']), null, __('Are you sure you want to delete # %s?', $driver['Driver']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Driver Routes'), array('controller' => 'driver_routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Route'), array('controller' => 'driver_routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Driver Routes'); ?></h3>
	<?php if (!empty($driver['DriverRoute'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Route Id'); ?></th>
		<th><?php echo __('Driver Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($driver['DriverRoute'] as $driverRoute): ?>
		<tr>
			<td><?php echo $driverRoute['route_id']; ?></td>
			<td><?php echo $driverRoute['driver_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'driver_routes', 'action' => 'view', $driverRoute['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'driver_routes', 'action' => 'edit', $driverRoute['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'driver_routes', 'action' => 'delete', $driverRoute['id']), null, __('Are you sure you want to delete # %s?', $driverRoute['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Driver Route'), array('controller' => 'driver_routes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tours'); ?></h3>
	<?php if (!empty($driver['Tour'])): ?>
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
	<?php foreach ($driver['Tour'] as $tour): ?>
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
