<div class="treatments index">
	<h2><?php echo __('Treatments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status_treament'); ?></th>
			<th><?php echo $this->Paginator->sort('treatment'); ?></th>
			<th><?php echo $this->Paginator->sort('observations_treaments'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($treatments as $treatment): ?>
	<tr>
		<td><?php echo h($treatment['Treatment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($treatment['Person']['name'], array('controller' => 'people', 'action' => 'view', $treatment['Person']['id'])); ?>
		</td>
		<td><?php echo h($treatment['Treatment']['status_treament']); ?>&nbsp;</td>
		<td><?php echo h($treatment['Treatment']['treatment']); ?>&nbsp;</td>
		<td><?php echo h($treatment['Treatment']['observations_treaments']); ?>&nbsp;</td>
		<td><?php echo h($treatment['Treatment']['created']); ?>&nbsp;</td>
		<td><?php echo h($treatment['Treatment']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $treatment['Treatment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $treatment['Treatment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $treatment['Treatment']['id']), array(), __('Are you sure you want to delete # %s?', $treatment['Treatment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Treatment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
