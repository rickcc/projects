<div class="agents view">
<h2><?php  echo __('Agent');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Agent'), 
									array('action' => 'edit', $agent['Agent']['id'],),
									array('class' => 'cbAjax')); ?></li>
		<?php if (AuthComponent::user('role') == 'admin') { ?>
			<li><?php echo $this->Form->postLink(__('Delete Agent'), array('action' => 'delete', $agent['Agent']['id']), null, __('Are you sure you want to delete # %s?', $agent['Agent']['id'])); ?> </li>
		<?php } ?>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bizassists');?></h3>
	<?php if (!empty($agent['Bizassist'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<?php echo $this->Html->tableHeaders(
		array(__('Actions'), __('Title'), __('Company'), __('Status'), __('Enabled')),
    	null,  // tr
    	array('class' => 'actions')
		); ?>
	<?php
		$i = 0;
		foreach ($agent['Bizassist'] as $bizassist): ?>
		<tr>
			<td class="actions">
				<?php echo $this->Html->link(__('Details'), array('controller' => 'bizassists', 'action' => 'view', $bizassist['id'])); ?>
				<?php //echo $this->Html->link(__('Edit'), array('controller' => 'bizassists', 'action' => 'edit', $bizassist['id'])); ?>
				<?php //echo $this->Form->postLink(__('Delete'), array('controller' => 'bizassists', 'action' => 'delete', $bizassist['id']), null, __('Are you sure you want to delete # %s?', $bizassist['id'])); ?>
			</td>
			<td><?php echo $bizassist['title'];?></td>
			<td><?php echo $bizassist['Company']['title'];?></td>
			<td><?php echo $bizassist['Bastatustype']['title'];?></td>
			<td><?php echo $bizassist['enabled'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php //echo $this->Html->link(__('New Bizassist'), array('controller' => 'bizassists', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Companies');?></h3>
	<?php if (!empty($agent['Company'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="actions"><?php echo __('Actions');?></th>
		<th><?php echo __('INet ID'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Post Code'); ?></th>
		<th><?php echo __('Western Peninsula'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Enabled'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($agent['Company'] as $company): ?>
		<tr>
			<td class="actions">
				<?php echo $this->Html->link(__('Details'), array('controller' => 'companies', 'action' => 'view', $company['id'])); ?>
				<?php //echo $this->Html->link(__('Edit'), array('controller' => 'companies', 'action' => 'edit', $company['id'])); ?>
				<?php //echo $this->Form->postLink(__('Delete'), array('controller' => 'companies', 'action' => 'delete', $company['id']), null, __('Are you sure you want to delete # %s?', $company['id'])); ?>
			</td>
			<td><?php echo $company['iNetID'];?></td>
			<td><?php echo $company['title'];?></td>
			<td><?php echo $company['address'];?></td>
			<td><?php echo $company['postCode'];?></td>
			<td><?php echo $company['westernPeninsula'];?></td>
			<td><?php echo $company['details'];?></td>
			<td><?php echo $company['enabled'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php //echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
