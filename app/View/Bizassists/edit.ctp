<div class="bizassists form">
<?php echo $this->Form->create('Bizassist');?>
	<fieldset>
		<legend><?php $action = ucfirst($this->params['action']); echo __("$action Business Assist"); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('iNetID', array('label' => 'iNet ID'));
		echo $this->Form->input('title');
		if (isset($this->request['named']['company_id'])) {
			echo $this->Form->input('company_id', array('selected' => $this->request['named']['company_id']));
		} else {
			echo $this->Form->input('company_id');
		}
		echo $this->Form->input('bastatustype_id', array('label' => 'Status'));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bizassist.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Bizassist.id'))); ?></li>
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
-->