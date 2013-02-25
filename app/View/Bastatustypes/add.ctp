<div class="bastatustypes form">
<?php echo $this->Form->create('Bastatustype');?>
	<fieldset>
		<legend><?php echo __('Add Bastatustype'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List Bastatustypes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Bizassists'), array('controller' => 'bizassists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bizassist'), array('controller' => 'bizassists', 'action' => 'add')); ?> </li>
	</ul>
</div>
