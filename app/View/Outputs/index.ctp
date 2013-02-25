<div class="outputs index">
	<h2><?php echo __('Outputs');?></h2>

	<?php echo $this->element('FilterPopup'); ?>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="actions"><?php echo __('Actions');?></th>
			<th><?php echo __('Linked To');?></th>
			<th><?php echo $this->Paginator->sort('optype_id', 'Type');?></th>
			<th><?php echo $this->Paginator->sort('quantity', 'Qty');?></th>
			<th><?php echo $this->Paginator->sort('opstatustype_id', 'Status');?></th>
			<th><?php echo $this->Paginator->sort('actionDate', 'Action Date');?></th>
			<th><?php echo $this->Paginator->sort('evidenceOnFile', 'Evidence On File');?></th>
			<th><?php echo $this->Paginator->sort('evidenceDate', 'Evidence Date');?></th>
			<th><?php echo $this->Paginator->sort('details');?></th>
			<th><?php echo $this->Paginator->sort('enabled');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($outputs as $output): ?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link(__('Details'), array('action' => 'view', $output['Output']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $output['Output']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $output['Output']['id']), array('class' => 'cbAjax')); ?></li>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $output['Output']['id']), null, __('Are you sure you want to delete # %s?', $output['Output']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($output['Bizassist']['title'], array('controller' => 'bizassists', 'action' => 'view', $output['Bizassist']['id'])); ?>
			<?php echo $this->Html->link($output['Project']['title'], array('controller' => 'projects', 'action' => 'view', $output['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($output['Optype']['title'], array('controller' => 'optypes', 'action' => 'view', $output['Optype']['id'])); ?>
		</td>
		<td><?php echo h($output['Output']['quantity']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($output['Opstatustype']['title'], array('controller' => 'opstatustypes', 'action' => 'view', $output['Opstatustype']['id'])); ?>
		</td>
		<td><?php echo h($output['Output']['actionDate']); ?>&nbsp;</td>
		<td><?php echo h($output['Output']['evidenceOnFile']); ?>&nbsp;</td>
		<td><?php echo h($output['Output']['evidenceDate']); ?>&nbsp;</td>
		<td><?php echo h($output['Output']['details']); ?>&nbsp;</td>
		<td><?php echo h($output['Output']['enabled']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link('New Output', array('action' => 'add'), array('class' => 'cbAjax')); ?></li>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('List Bizassists'), array('controller' => 'bizassists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Output Types'), array('controller' => 'optypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Types'), array('controller' => 'opstatustypes', 'action' => 'index')); ?> </li>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('Export'), array('action' => 'index', 'export')); ?> </li>
	</ul>
</div>
<?php echo $this->element('DebugPopup', array('varToDisplay' => $outputs)); ?>
