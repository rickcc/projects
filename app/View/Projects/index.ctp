<div class="projects index">
	<h2><?php echo __('Projects');?></h2>

	<?php echo $this->element('FilterPopup'); ?>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="actions"><?php echo __('Actions');?></th>
			<th><?php echo $this->Paginator->sort('iNetID', 'iNet ID');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('company_id');?></th>
			<th><?php echo $this->Paginator->sort('bastatustype_id', 'Status');?></th>
			<th><?php echo $this->Paginator->sort('agent_id');?></th>
			<th><?php echo $this->Paginator->sort('enabled');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($projects as $project): ?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link(__('Details'), array('action' => 'view', $project['Project']['id'])); ?>
		</td>
		<td><?php echo h($project['Project']['iNetID']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['title']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['Company']['title'], array('controller' => 'companies', 'action' => 'view', $project['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['Bastatustype']['title'], array('controller' => 'bastatustypes', 'action' => 'view', $project['Bastatustype']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['Agent']['title'], array('controller' => 'agents', 'action' => 'view', $project['Agent']['id'])); ?>
		</td>
		<td><?php echo h($project['Project']['enabled']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link('New Project', array('action' => 'add'), array('class' => 'cbAjax')); ?></li>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
	</ul>
</div>
