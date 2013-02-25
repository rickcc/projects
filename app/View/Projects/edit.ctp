<div class="projects form">
<?php echo $this->Form->create('Project');?>
	<fieldset>
		<legend><?php $action = ucfirst($this->params['action']); echo __("$action Project"); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Project.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Project.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output'), array('controller' => 'outputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->