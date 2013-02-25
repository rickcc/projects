<div class="opstatustypes index">
	<h2><?php echo __('Output Status Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="actions"><?php echo __('Actions');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($opstatustypes as $opstatustype): ?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $opstatustype['Opstatustype']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $opstatustype['Opstatustype']['id']), array('class' => 'cbAjax')); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $opstatustype['Opstatustype']['id']), null, __('Are you sure you want to delete # %s?', $opstatustype['Opstatustype']['id'])); ?>
		</td>
		<td><?php echo h($opstatustype['Opstatustype']['title']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('New Output Status Type'), array('action' => 'add'), array('class' => 'cbAjax')); ?></li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
	</ul>
</div>
