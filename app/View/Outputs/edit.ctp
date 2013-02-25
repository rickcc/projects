<div class="outputs form">
<?php echo $this->Form->create('Output');?>
	<fieldset>
		<legend><?php $action = ucfirst($this->params['action']); echo __("$action Output"); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo "<table width=400><tr><td>";
		if (isset($this->request['named']['bizassist_id'])) {
			echo $this->Form->input('bizassist_id', array('empty' => 'None', 'selected' => $this->request['named']['bizassist_id']));
		} else {
			echo $this->Form->input('bizassist_id', array('empty' => 'None'));
		}
		echo "</td><td>";
		echo "<b>OR</b>";
		echo "</td><td>";
		if (isset($this->request['named']['project_id'])) {
			echo $this->Form->input('project_id', array('empty' => 'None', 'selected' => $this->request['named']['project_id']));
		} else {
			echo $this->Form->input('project_id', array('empty' => 'None'));
		}
		echo "</td><td width=80%>&nbsp;</td></tr></table>";
		echo $this->Form->input('optype_id', array('label' => 'Output'));
		echo $this->Form->input('quantity', array('empty' => '', 'default' => 1));
		echo $this->Form->input('opstatustype_id', array('label' => 'Status'));
		echo $this->Form->input('actionDate', array('minYear' => 2010, 'maxYear' => '2015'));
		echo $this->Form->input('evidenceOnFile');
		echo $this->Form->input('evidenceDate', array('empty' => '', 'default' => '', 'minYear' => 2010, 'maxYear' => '2015'));
		echo $this->Form->input('enabled', array('default' => true));
		echo $this->Form->input('details');
		//echo $this->Form->input('modifiedDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
<?php if (isset($this->request->data['Optype'])) { ?>
	<h3><?php echo __('Evidence Required'); ?></h3>
	<p>
		<?php echo h($this->request->data['Optype']['evidence']); ?>
		&nbsp;
	</p>
<?php } ?>
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Output.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Output.id'))); ?></li>
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
-->