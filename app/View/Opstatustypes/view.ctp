<div class="opstatustypes view">
<h2><?php  echo __('Output Status Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($opstatustype['Opstatustype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($opstatustype['Opstatustype']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ModifiedDate'); ?></dt>
		<dd>
			<?php echo h($opstatustype['Opstatustype']['modifiedDate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Output Status Type'), array('action' => 'edit', $opstatustype['Opstatustype']['id']), array('class' => 'cbAjax')); ?> </li>
		<?php if (AuthComponent::user('role') == 'admin') { ?>
			<li><?php echo $this->Form->postLink(__('Delete Output Status Type'), array('action' => 'delete', $opstatustype['Opstatustype']['id']), null, __('Are you sure you want to delete # %s?', $opstatustype['Opstatustype']['id'])); ?> </li>
		<?php } ?>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('List Output Status Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Outputs');?></h3>
	<?php if (!empty($opstatustype['Output'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="actions"><?php echo __('Actions');?></th>
		<th><?php echo __('Linked To');?></th>
		<th><?php echo __('Output Type'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Action Date'); ?></th>
		<th><?php echo __('Evidence On File'); ?></th>
		<th><?php echo __('Evidence Date'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($opstatustype['Output'] as $output): ?>
		<tr>
			<td class="actions">
				<?php echo $this->Html->link(__('Details'), array('controller' => 'outputs', 'action' => 'view', $output['id'])); ?>
				<?php //echo $this->Html->link(__('Edit'), array('controller' => 'outputs', 'action' => 'edit', $output['id'])); ?>
				<?php //echo $this->Form->postLink(__('Delete'), array('controller' => 'outputs', 'action' => 'delete', $output['id']), null, __('Are you sure you want to delete # %s?', $output['id'])); ?>
			</td>
			<td>
				<?php if (isset($output['Bizassist']['title'])) echo $this->Html->link($output['Bizassist']['title'], array('controller' => 'bizassists', 'action' => 'view', $output['Bizassist']['id'])); ?>
				<?php if (isset($output['Project']['title'])) echo $this->Html->link($output['Project']['title'], array('controller' => 'projects', 'action' => 'view', $output['Project']['id'])); ?>
			</td>
			<td><?php echo $this->Html->link($output['Optype']['title'], array('controller' => 'optypes', 'action' => 'view', $output['Optype']['id'])); ?></td>
			<td><?php echo $output['quantity'];?></td>
			<td><?php echo $output['actionDate'];?></td>
			<td><?php echo $output['evidenceOnFile'];?></td>
			<td><?php echo $output['evidenceDate'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
	<?php endif; ?>

</div>
