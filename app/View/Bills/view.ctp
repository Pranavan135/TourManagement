<div class="bills view">
<h2><?php echo __('Bill'); ?></h2>
	<dl>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tour Code'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['tour_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Town'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bill['Town']['name'], array('controller' => 'towns', 'action' => 'view', $bill['Town']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bill['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $bill['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bill Date'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['bill_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Individuals'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['number_of_individuals']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['amount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bill'), array('action' => 'edit', $bill['Bill']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bill'), array('action' => 'delete', $bill['Bill']['id']), null, __('Are you sure you want to delete # %s?', $bill['Bill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bill'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Towns'), array('controller' => 'towns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('controller' => 'towns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
