<?php
$this->Paginator->options(array(
    'update' => '#content',
    'evalScripts' => true
)); ?>
<div class="companies index">
	<h2><?php echo __('Companies');?></h2>

	<?php echo $this->element('FilterPopup'); ?>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="actions"><?php echo __('Actions');?></th>
			<th><?php echo $this->Paginator->sort('iNetID', 'iNet ID');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('postCode', 'Post Code');?></th>
			<th><?php echo $this->Paginator->sort('westernPeninsula', 'Western Peninsula');?></th>
			<th><?php echo $this->Paginator->sort('agent_id');?></th>
			<th><?php echo $this->Paginator->sort('details');?></th>
			<th><?php echo $this->Paginator->sort('enabled');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($companies as $company): ?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link(__('Details'), array('action' => 'view', $company['Company']['id'])); ?>
		</td>
		<td><?php echo h($company['Company']['iNetID']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['title']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['address']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['postCode']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['westernPeninsula']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($company['Agent']['title'], array('controller' => 'agents', 'action' => 'view', $company['Agent']['id'])); ?>
		</td>
		<td><?php echo h($company['Company']['details']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['enabled']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link('New Company', array('action' => 'add'), array('class' => 'cbAjax')); ?></li>
	</ul>
</div>

<?php echo $this->element('DebugPopup', array('varToDisplay' => $companies)); ?>
