<div class="tours view">
<h2><?php echo __('Tour'); ?></h2>
	<dl>
		<dt><?php echo __('Tour Code'); ?></dt>
		<dd>
			<?php echo h($tour['Tour']['tour_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($tour['Tour']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tour['Driver']['name'], array('controller' => 'drivers', 'action' => 'view', $tour['Driver']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Route'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tour['Route']['name'], array('controller' => 'routes', 'action' => 'view', $tour['Route']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coach'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tour['Coach'][''], array('controller' => 'coaches', 'action' => 'view', $tour['Coach']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Executed'); ?></dt>
		<dd>
			<?php echo h($tour['Tour']['executed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tour'), array('action' => 'edit', $tour['Tour']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tour'), array('action' => 'delete', $tour['Tour']['id']), null, __('Are you sure you want to delete # %s?', $tour['Tour']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tours'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coaches'), array('controller' => 'coaches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coach'), array('controller' => 'coaches', 'action' => 'add')); ?> </li>
	</ul>
</div>
