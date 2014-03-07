<div class="towns view">
<h2><?php echo __('Town'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($town['Town']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($town['Town']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Town'), array('action' => 'edit', $town['Town']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Town'), array('action' => 'delete', $town['Town']['id']), null, __('Are you sure you want to delete # %s?', $town['Town']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Towns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bills'), array('controller' => 'bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bill'), array('controller' => 'bills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bills'); ?></h3>
	<?php if (!empty($town['Bill'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Ref No'); ?></th>
		<th><?php echo __('Tour Code'); ?></th>
		<th><?php echo __('Town Id'); ?></th>
		<th><?php echo __('Hotel Id'); ?></th>
		<th><?php echo __('Bill Date'); ?></th>
		<th><?php echo __('Number Of Individuals'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($town['Bill'] as $bill): ?>
		<tr>
			<td><?php echo $bill['ref_no']; ?></td>
			<td><?php echo $bill['tour_code']; ?></td>
			<td><?php echo $bill['town_id']; ?></td>
			<td><?php echo $bill['hotel_id']; ?></td>
			<td><?php echo $bill['bill_date']; ?></td>
			<td><?php echo $bill['number_of_individuals']; ?></td>
			<td><?php echo $bill['amount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bills', 'action' => 'view', $bill['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bills', 'action' => 'edit', $bill['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bills', 'action' => 'delete', $bill['id']), null, __('Are you sure you want to delete # %s?', $bill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bill'), array('controller' => 'bills', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotels'); ?></h3>
	<?php if (!empty($town['Hotel'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Town Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($town['Hotel'] as $hotel): ?>
		<tr>
			<td><?php echo $hotel['id']; ?></td>
			<td><?php echo $hotel['town_id']; ?></td>
			<td><?php echo $hotel['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotels', 'action' => 'view', $hotel['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotels', 'action' => 'edit', $hotel['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotels', 'action' => 'delete', $hotel['id']), null, __('Are you sure you want to delete # %s?', $hotel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
