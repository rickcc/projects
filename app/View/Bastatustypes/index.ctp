<div class="bastatustypes index">
	<h2><?php echo __('Status Types - Biz Assists and Projects');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="actions"><?php echo __('Actions');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bastatustypes as $bastatustype): ?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bastatustype['Bastatustype']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bastatustype['Bastatustype']['id']), array('class' => 'cbAjax')); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bastatustype['Bastatustype']['id']), null, __('Are you sure you want to delete # %s?', $bastatustype['Bastatustype']['id'])); ?>
		</td>
		<td><?php echo h($bastatustype['Bastatustype']['title']); ?>&nbsp;</td>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Status Type'), array('action' => 'add'), array('class' => 'cbAjax')); ?></li>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('List Bizassists'), array('controller' => 'bizassists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
	</ul>
</div>
