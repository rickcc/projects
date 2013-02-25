<div class="outputs form">
<?php echo $this->Form->create('Output');?>
	<fieldset>
		<legend><?php echo __('Add Output'); ?></legend>
	<?php
		echo $this->Form->input('bizassist_id', array('empty' => 'None'));
		echo $this->Form->input('project_id', array('empty' => 'None'));
		echo $this->Form->input('optype_id');
		echo $this->Form->input('quantity');
		echo $this->Form->input('opstatustype_id');
		echo $this->Form->input('actionDate');
		echo $this->Form->input('evidenceOnFile');
		echo $this->Form->input('evidenceDate');
		echo $this->Form->input('modifiedDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Outputs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Bizassists'), array('controller' => 'bizassists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bizassist'), array('controller' => 'bizassists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Optypes'), array('controller' => 'optypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Optype'), array('controller' => 'optypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Opstatustypes'), array('controller' => 'opstatustypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opstatustype'), array('controller' => 'opstatustypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
