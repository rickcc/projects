<div class="agents form">
<?php echo $this->Form->create('Agent');?>
	<fieldset>
		<legend><?php $action = ucfirst($this->params['action']); echo __("$action Agent"); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Agent.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Agent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Agents'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Bizassists'), array('controller' => 'bizassists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bizassist'), array('controller' => 'bizassists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->