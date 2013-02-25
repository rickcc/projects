<?php
$this->Paginator->options(array(
    'update' => '#content',
    'evalScripts' => true
)); ?>
<div class="agents index">
	<h2><?php echo __('Agents');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="actions"><?php echo __('Actions');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($agents as $agent): ?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link(__('Details'), array('action' => 'view', $agent['Agent']['id'])); ?>
		</td>
		<td><?php echo h($agent['Agent']['title']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('New Agent'), array('action' => 'add'), array('class' => 'cbAjax')); ?></li>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('List Bizassists'), array('controller' => 'bizassists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
	</ul>
</div>
