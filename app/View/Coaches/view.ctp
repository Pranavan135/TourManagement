<div class="coaches view">
<h2><?php echo __('Coach'); ?></h2>
	<dl>
		<dt><?php echo __('Reg No'); ?></dt>
		<dd>
			<?php echo h($coach['Coach']['reg_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacity'); ?></dt>
		<dd>
			<?php echo h($coach['Coach']['capacity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Service Date'); ?></dt>
		<dd>
			<?php echo h($coach['Coach']['last_service_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Service Mileage'); ?></dt>
		<dd>
			<?php echo h($coach['Coach']['last_service_mileage']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coach'), array('action' => 'edit', $coach['Coach']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coach'), array('action' => 'delete', $coach['Coach']['id']), null, __('Are you sure you want to delete # %s?', $coach['Coach']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coaches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coach'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tours'); ?></h3>
	<?php if (!empty($coach['Tour'])): ?>
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
	<?php foreach ($coach['Tour'] as $tour): ?>
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
