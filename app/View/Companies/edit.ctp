<div class="companies form">
<?php echo $this->Form->create('Company');?>
	<fieldset>
		<legend><?php $action = ucfirst($this->params['action']); echo __("$action Company"); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('iNetID', array('label' => 'iNet ID'));
		echo $this->Form->input('title');
		echo $this->Form->input('address');
		echo $this->Form->input('postCode');
		echo $this->Form->input('westernPeninsula');
		echo $this->Form->input('agent_id');
		echo $this->Form->input('details');
		echo $this->Form->input('enabled', array('default' => true));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	<?php if ($action == 'Edit') { ?>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Company.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Company.id'))); ?></li>
	<?php } ?>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bizassists'), array('controller' => 'bizassists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bizassist'), array('controller' => 'bizassists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->