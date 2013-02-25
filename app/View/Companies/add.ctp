<div class="companies form">
<?php echo $this->Form->create('Company');?>
	<fieldset>
		<legend><?php echo __('Add Company'); ?></legend>
	<?php
		echo $this->Form->input('iNetID');
		echo $this->Form->input('title');
		echo $this->Form->input('address');
		echo $this->Form->input('postCode');
		echo $this->Form->input('westernPeninsula');
		echo $this->Form->input('agent_id');
		echo $this->Form->input('details');
		echo $this->Form->input('modifiedDate');
		echo $this->Form->input('enabled');
		echo $this->Form->input('flags');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bizassists'), array('controller' => 'bizassists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bizassist'), array('controller' => 'bizassists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
