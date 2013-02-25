<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php $action = ucfirst($this->params['action']); echo __("$action User"); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		if (AuthComponent::user('role') == 'admin') { 
			echo $this->Form->input('role', array('options' => array('admin' => 'Admin', 'user' => 'User')));
		} else {
			echo $this->Form->input('role', array('options' => array('user' => 'User')));
		}
		if (AuthComponent::user('role') == 'admin') { 
			echo $this->Form->input('key');
		}
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<?php if (AuthComponent::user('role') == 'admin') { ?>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<?php } ?>
		
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
	</ul>
</div>
-->