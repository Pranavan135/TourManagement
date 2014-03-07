<div class="hotels view">
<h2><?php echo __('Hotel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Town'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['Town']['name'], array('controller' => 'towns', 'action' => 'view', $hotel['Town']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel'), array('action' => 'edit', $hotel['Hotel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotel'), array('action' => 'delete', $hotel['Hotel']['id']), null, __('Are you sure you want to delete # %s?', $hotel['Hotel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Towns'), array('controller' => 'towns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('controller' => 'towns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bills'), array('controller' => 'bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bill'), array('controller' => 'bills', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bills'); ?></h3>
	<?php if (!empty($hotel['Bill'])): ?>
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
	<?php foreach ($hotel['Bill'] as $bill): ?>
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
