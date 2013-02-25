<div class="bastatustypes view">
<h2><?php  echo __('Status Type - Biz Assists and Projects');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bastatustype['Bastatustype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($bastatustype['Bastatustype']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ModifiedDate'); ?></dt>
		<dd>
			<?php echo h($bastatustype['Bastatustype']['modifiedDate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status Type'), array('action' => 'edit', $bastatustype['Bastatustype']['id']), array('class' => 'cbAjax')); ?> </li>
		<?php if (AuthComponent::user('role') == 'admin') { ?>
			<li><?php echo $this->Form->postLink(__('Delete Status Type'), array('action' => 'delete', $bastatustype['Bastatustype']['id']), null, __('Are you sure you want to delete # %s?', $bastatustype['Bastatustype']['id'])); ?> </li>
		<?php } ?>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('List Status Types'), array('action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bizassists');?></h3>
	<?php if (!empty($bastatustype['Bizassist'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="actions"><?php echo __('Actions');?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Company'); ?></th>
		<th><?php echo __('Enabled'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bastatustype['Bizassist'] as $bizassist): ?>
		<tr>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bizassists', 'action' => 'view', $bizassist['id'])); ?>
				<?php //echo $this->Html->link(__('Edit'), array('controller' => 'bizassists', 'action' => 'edit', $bizassist['id'])); ?>
				<?php //echo $this->Form->postLink(__('Delete'), array('controller' => 'bizassists', 'action' => 'delete', $bizassist['id']), null, __('Are you sure you want to delete # %s?', $bizassist['id'])); ?>
			</td>
			<td><?php echo $bizassist['title'];?></td>
			<td><?php echo $this->Html->link($bizassist['Company']['title'], array('controller' => 'companies', 'action' => 'view', $bizassist['Company']['id']));?></td>
			<td><?php echo $bizassist['enabled'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

<!--
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bizassist'), array('controller' => 'bizassists', 'action' => 'add'));?> </li>
		</ul>
	</div>
-->
</div>
