<div class="optypes index">
	<h2><?php echo __('Output Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="actions"><?php echo __('Actions');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('evidence');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($optypes as $optype): ?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link(__('Details'), array('action' => 'view', $optype['Optype']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $optype['Optype']['id']), array('class' => 'cbAjax')); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $optype['Optype']['id']), null, __('Are you sure you want to delete # %s?', $optype['Optype']['id'])); ?>
		</td>
		<td><?php echo h($optype['Optype']['title']); ?>&nbsp;</td>
		<td><?php echo h($optype['Optype']['evidence']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('New Output Type'), array('action' => 'add'), array('class' => 'cbAjax')); ?></li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
	</ul>
</div>
