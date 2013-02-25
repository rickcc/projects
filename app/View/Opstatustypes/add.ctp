<div class="opstatustypes form">
<?php echo $this->Form->create('Opstatustype');?>
	<fieldset>
		<legend><?php echo __('Add Opstatustype'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('modifiedDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Opstatustypes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output'), array('controller' => 'outputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
