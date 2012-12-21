<div class="subscriptions index">
	<h2><?php echo __('Subscriptions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subscription_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('prepaid_count'); ?></th>
			<th><?php echo $this->Paginator->sort('valid_from'); ?></th>
			<th><?php echo $this->Paginator->sort('valid_to'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($subscriptions as $subscription): ?>
	<tr>
		<td><?php echo h($subscription['Subscription']['id']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['created']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subscription['Person']['name'], array('controller' => 'people', 'action' => 'view', $subscription['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subscription['SubscriptionType']['name'], array('controller' => 'subscription_types', 'action' => 'view', $subscription['SubscriptionType']['id'])); ?>
		</td>
		<td><?php echo h($subscription['Subscription']['prepaid_count']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['valid_from']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['valid_to']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subscription['Subscription']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subscription['Subscription']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subscription['Subscription']['id']), null, __('Are you sure you want to delete # %s?', $subscription['Subscription']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>