<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Passengers'), array('controller' => 'passengers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Passenger'), array('controller' => 'passengers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Passengers'); ?></h3>
	<?php if (!empty($customer['Passenger'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Tour Code'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Passenger'] as $passenger): ?>
		<tr>
			<td><?php echo $passenger['customer_id']; ?></td>
			<td><?php echo $passenger['tour_code']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'passengers', 'action' => 'view', $passenger['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'passengers', 'action' => 'edit', $passenger['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'passengers', 'action' => 'delete', $passenger['id']), null, __('Are you sure you want to delete # %s?', $passenger['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Passenger'), array('controller' => 'passengers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
