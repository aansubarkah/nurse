<div class="activities view">
<h2><?php echo __('Activity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categorytree'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activity['Categorytree']['id'], array('controller' => 'categorytrees', 'action' => 'view', $activity['Categorytree']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activity['Value']['name'], array('controller' => 'values', 'action' => 'view', $activity['Value']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activity'), array('action' => 'edit', $activity['Activity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activity'), array('action' => 'delete', $activity['Activity']['id']), array(), __('Are you sure you want to delete # %s?', $activity['Activity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorytrees'), array('controller' => 'categorytrees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorytree'), array('controller' => 'categorytrees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Values'), array('controller' => 'values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Value'), array('controller' => 'values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactioncategorytreeviews'), array('controller' => 'transactioncategorytreeviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transactioncategorytreeview'), array('controller' => 'transactioncategorytreeviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Transactioncategorytreeviews'); ?></h3>
	<?php if (!empty($activity['Transactioncategorytreeview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Activity Id'); ?></th>
		<th><?php echo __('Categorytree Id'); ?></th>
		<th><?php echo __('Categorytreeparent Id'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Value Id'); ?></th>
		<th><?php echo __('Valuename'); ?></th>
		<th><?php echo __('Categoryname'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($activity['Transactioncategorytreeview'] as $transactioncategorytreeview): ?>
		<tr>
			<td><?php echo $transactioncategorytreeview['id']; ?></td>
			<td><?php echo $transactioncategorytreeview['activity_id']; ?></td>
			<td><?php echo $transactioncategorytreeview['categorytree_id']; ?></td>
			<td><?php echo $transactioncategorytreeview['categorytreeparent_id']; ?></td>
			<td><?php echo $transactioncategorytreeview['start']; ?></td>
			<td><?php echo $transactioncategorytreeview['end']; ?></td>
			<td><?php echo $transactioncategorytreeview['user_id']; ?></td>
			<td><?php echo $transactioncategorytreeview['value_id']; ?></td>
			<td><?php echo $transactioncategorytreeview['valuename']; ?></td>
			<td><?php echo $transactioncategorytreeview['categoryname']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transactioncategorytreeviews', 'action' => 'view', $transactioncategorytreeview['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transactioncategorytreeviews', 'action' => 'edit', $transactioncategorytreeview['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transactioncategorytreeviews', 'action' => 'delete', $transactioncategorytreeview['id']), array(), __('Are you sure you want to delete # %s?', $transactioncategorytreeview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transactioncategorytreeview'), array('controller' => 'transactioncategorytreeviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($activity['Transaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Activity Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Evidence Id'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($activity['Transaction'] as $transaction): ?>
		<tr>
			<td><?php echo $transaction['id']; ?></td>
			<td><?php echo $transaction['activity_id']; ?></td>
			<td><?php echo $transaction['user_id']; ?></td>
			<td><?php echo $transaction['evidence_id']; ?></td>
			<td><?php echo $transaction['start']; ?></td>
			<td><?php echo $transaction['end']; ?></td>
			<td><?php echo $transaction['created']; ?></td>
			<td><?php echo $transaction['modified']; ?></td>
			<td><?php echo $transaction['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transactions', 'action' => 'view', $transaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transactions', 'action' => 'edit', $transaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transactions', 'action' => 'delete', $transaction['id']), array(), __('Are you sure you want to delete # %s?', $transaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
