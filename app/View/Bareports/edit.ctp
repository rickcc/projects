<div class="bareports form">
<?php echo $this->Form->create('Bareport');?>
	<fieldset>
		<legend><?php $action = ucfirst($this->params['action']); echo __("$action Project"); ?></legend>
	<?php
		echo $this->Form->input('id');
		if (isset($this->request['named']['company_id'])) {
			echo $this->Form->input('company_id', array('selected' => $this->request['named']['company_id']));
		} else {
			echo $this->Form->input('company_id');
		}
		echo $this->Form->input('agent_id');
		echo $this->Form->input('engaged', array('default' => true));
		echo $this->Form->input('completed', array('default' => false));
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