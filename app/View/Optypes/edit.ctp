<div class="optypes form">
<?php echo $this->Form->create('Optype');?>
	<fieldset>
		<legend><?php $action = ucfirst($this->params['action']); echo __("$action Output Type"); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('evidence');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Optype.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Optype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Optypes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output'), array('controller' => 'outputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
