<div class="routeTowns view">
<h2><?php echo __('Route Town'); ?></h2>
	<dl>
		<dt><?php echo __('Route'); ?></dt>
		<dd>
			<?php echo $this->Html->link($routeTown['Route']['name'], array('controller' => 'routes', 'action' => 'view', $routeTown['Route']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Town'); ?></dt>
		<dd>
			<?php echo $this->Html->link($routeTown['Town']['name'], array('controller' => 'towns', 'action' => 'view', $routeTown['Town']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Route Town'), array('action' => 'edit', $routeTown['RouteTown']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Route Town'), array('action' => 'delete', $routeTown['RouteTown']['id']), null, __('Are you sure you want to delete # %s?', $routeTown['RouteTown']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Route Towns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route Town'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Towns'), array('controller' => 'towns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('controller' => 'towns', 'action' => 'add')); ?> </li>
	</ul>
</div>
