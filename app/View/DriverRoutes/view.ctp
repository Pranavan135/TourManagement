<div class="driverRoutes view">
<h2><?php echo __('Driver Route'); ?></h2>
	<dl>
		<dt><?php echo __('Route'); ?></dt>
		<dd>
			<?php echo $this->Html->link($driverRoute['Route']['name'], array('controller' => 'routes', 'action' => 'view', $driverRoute['Route']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver'); ?></dt>
		<dd>
			<?php echo $this->Html->link($driverRoute['Driver']['name'], array('controller' => 'drivers', 'action' => 'view', $driverRoute['Driver']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Driver Route'), array('action' => 'edit', $driverRoute['DriverRoute']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Driver Route'), array('action' => 'delete', $driverRoute['DriverRoute']['id']), null, __('Are you sure you want to delete # %s?', $driverRoute['DriverRoute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Driver Routes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Route'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
	</ul>
</div>
