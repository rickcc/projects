<div class="bizassists form">
<?php echo $this->Form->create('Bizassist');?>
	<fieldset>
		<legend><?php echo __('Add Bizassist'); ?></legend>
	<?php
		echo $this->Form->input('iNetID');
		echo $this->Form->input('title');
		echo $this->Form->input('company_id');
		echo $this->Form->input('bastatustype_id');
		echo $this->Form->input('agent_id');
		echo $this->Form->input('enabled');
		echo $this->Form->input('modifiedDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bizassists'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bastatustypes'), array('controller' => 'bastatustypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bastatustype'), array('controller' => 'bastatustypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output'), array('controller' => 'outputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
