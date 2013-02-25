<?php if (!$quickview) { ?>
<div class="projects view">
<h2><?php  echo __('Project');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('INetID'); ?></dt>
		<dd>
			<?php echo h($project['Project']['iNetID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($project['Project']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Company']['title'], array('controller' => 'companies', 'action' => 'view', $project['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Bastatustype']['title'], array('controller' => 'bastatustypes', 'action' => 'view', $project['Bastatustype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Agent']['title'], array('controller' => 'agents', 'action' => 'view', $project['Agent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($project['Project']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($project['Project']['enabled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ModifiedDate'); ?></dt>
		<dd>
			<?php echo h($project['Project']['modifiedDate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id']), array('class' => 'cbAjax')); ?></li>
		<?php if (AuthComponent::user('role') == 'admin') { ?>
			<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<?php } ?>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Biz Assists'), array('controller' => 'bizassists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Types'), array('controller' => 'bastatustypes', 'action' => 'index')); ?> </li>
	</ul>
</div>
<?php } //if (!$quickview) { ?>
<div class="related">
	<h3><?php echo __('Related Outputs');?></h3>
	<?php if (!empty($project['Output'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
<?php if (!$quickview) { ?>
		<th class="actions"><?php echo __('Actions');?></th>
<?php } //if (!$quickview) { ?>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Action Date'); ?></th>
		<th><?php echo __('Evidence On File'); ?></th>
		<th><?php echo __('Evidence Date'); ?></th>
		<th><?php echo __('Enabled'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Output'] as $output): ?>
		<tr>
<?php if (!$quickview) { ?>
			<td class="actions">
				<?php echo $this->Html->link(__('Details'), array('controller' => 'outputs', 'action' => 'view', $output['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), 
									array('controller' => 'outputs', 'action' => 'edit', $output['id']),
									array('class' => 'cbAjax')); ?> 
			</td>
<?php } //if (!$quickview) { ?>
			<td><?php echo $output['Optype']['title'];?></td>
			<td><?php echo $output['quantity'];?></td>
			<td><?php echo $output['Opstatustype']['title'];?></td>
			<td><?php echo $output['actionDate'];?></td>
			<td><?php echo $output['evidenceOnFile'];?></td>
			<td><?php echo $output['evidenceDate'];?></td>
			<td><?php echo $output['enabled'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

<?php if (!$quickview) { ?>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Output'), 
									array('controller' => 'outputs', 'action' => 'add', 'project_id' => $project['Project']['id']),
									array('class' => 'cbAjax')); ?> </li>
		</ul>
	</div>
<?php } //if (!$quickview) { ?>

</div>