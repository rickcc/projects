<div class="opstatustypes form">
<?php echo $this->Form->create('Opstatustype');?>
	<fieldset>
		<legend><?php $action = ucfirst($this->params['action']); echo __("$action Output Status Type"); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Opstatustype.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Opstatustype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Opstatustypes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output'), array('controller' => 'outputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->