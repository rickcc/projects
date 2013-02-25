<?php if (!$quickview) { ?>
<div class="bizassists view">
<h2><?php  echo __('Bizassist');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bizassist['Bizassist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('INet ID'); ?></dt>
		<dd>
			<?php echo h($bizassist['Bizassist']['iNetID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($bizassist['Bizassist']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bizassist['Company']['title'], array('controller' => 'companies', 'action' => 'view', $bizassist['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bizassist['Bastatustype']['title'], array('controller' => 'bastatustypes', 'action' => 'view', $bizassist['Bastatustype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bizassist['Agent']['title'], array('controller' => 'agents', 'action' => 'view', $bizassist['Agent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($bizassist['Bizassist']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($bizassist['Bizassist']['enabled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($bizassist['Bizassist']['modifiedDate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bizassist'), array('action' => 'edit', $bizassist['Bizassist']['id']), array('class' => 'cbAjax')); ?></li>
		<?php if (AuthComponent::user('role') == 'admin') { ?>
			<li><?php echo $this->Form->postLink(__('Delete Bizassist'), array('action' => 'delete', $bizassist['Bizassist']['id']), null, __('Are you sure you want to delete # %s?', $bizassist['Bizassist']['id'])); ?> </li>
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
	<?php if (!empty($bizassist['Output'])):?>
	
	<div id="relatedOutputs">
	
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
		foreach ($bizassist['Output'] as $output): ?>
		<?php // debug($output,true); ?>
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

	</div>

<!--	
<?php echo $this->Form->create('Output', array('action' => 'add'));?>
	<fieldset>
		<legend><?php $action = ucfirst($this->params['action']); echo __("$action Output"); ?></legend>
	<?php
		echo $this->Form->hidden('bizassist_id', array('value' => $bizassist['Bizassist']['id']));		
		echo $this->Form->input('optype_id', array('label' => 'Output'));
		echo $this->Form->input('quantity', array('empty' => '', 'default' => 1));
		echo $this->Form->input('opstatustype_id', array('label' => 'Status'));
		echo $this->Form->input('actionDate', array('minYear' => 2010, 'maxYear' => '2015'));
		echo $this->Form->input('evidenceOnFile');
		echo $this->Form->input('evidenceDate', array('empty' => '', 'default' => '', 'minYear' => 2010, 'maxYear' => '2015'));
		echo $this->Form->input('enabled', array('default' => true));
	?>
	</fieldset>
<?php echo $this->Js->submit('Add', array('update' => '#relatedOutputs'));?>
<?php echo $this->Form->end();?>
-->

	<?php endif; ?>

<?php if (!$quickview) { ?>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Output'), 
									array('controller' => 'outputs', 'action' => 'add', 'bizassist_id' => $bizassist['Bizassist']['id']),
									array('class' => 'cbAjax')); ?> </li>
		</ul>
	</div>
<?php } //if (!$quickview) { ?>
</div>
