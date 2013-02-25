<div class="companies form">
<?php echo $this->Form->create('Company');?>
	<fieldset>
		<legend><?php echo __('Add Project to Company'); ?></legend>
	<?php
		$newName = $this->request->data['Company']['title'] . " : Project";
		
		echo $this->Form->hidden('Project.id', array('default' => ''));
		echo $this->Form->hidden('Project.iNetID', array('label' => 'iNet ID', 'default' => $this->request->data['Company']['iNetID']));
		echo $this->Form->hidden('Project.company_id', array('default' => $this->request->data['Company']['id']));
		echo $this->Form->hidden('Project.title', array('default' => $newName));
		echo $this->Form->hidden('Project.enabled', array('default' => true));
		
		echo "<table>";
		echo $this->Html->tableCells(array(
			$this->Form->input('Project.bastatustype_id', array('label' => 'Status')),
			$this->Form->input('Project.agent_id', array('default' => $this->request->data['Company']['agent_id']))
			));
		echo "</table>";
	?>		
		<h3><?php echo __('Engagement Form');?></h3>
	<?php
	
		echo "<table>";
		echo $this->Html->tableCells(array(
			$this->Form->input('hadSRB', array('type' => 'checkbox', 'label' => 'Had an SRB')),
			$this->Form->input('srbDate', array('type' => 'date', 'empty' => '', 'default' => '', 'minYear' => 2010, 'maxYear' => '2015', 'label' => 'Date of SRB'))
			));
		echo $this->Html->tableCells(array(
			$this->Form->input('gotEvaluation', array('type' => 'checkbox', 'label' => 'Have Project Evaluation Form')),
			$this->Form->input('actionDate', array('type' => 'date', 'minYear' => 2010, 'maxYear' => '2015', 'label' => 'Form Signed On'))
			));
		echo "</table>";


		echo "<table>";
		echo $this->Html->tableCells(array(
		 	$this->Form->input('newJobs', array('label' => 'New Jobs')),
		 	$this->Form->input('newRJobs', array('label' => 'New Research Jobs'))
			));
		echo $this->Html->tableCells(array(
		 	$this->Form->input('sgJobs', array('label' => 'Safeguarded Jobs')),
		 	$this->Form->input('sgRJobs', array('label' => 'Safeguarded Research Jobs'))
			));
		echo $this->Html->tableCells(array(
		 	$this->Form->input('iprUsed', array('label' => 'IPR Devices')),
		 	$this->Form->input('newProducts', array('label' => 'New Products'))
			));
		echo $this->Html->tableCells(array(
		 	$this->Form->input('collabBiz', array('label' => 'HEI Collaboration, SME Count')),
		 	$this->Form->input('increasedGVA', array('label' => 'Increased GVA', 'default' => 50000))
			));
		echo "</table>";

		echo $this->Form->input('Project.details');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<?php echo $this->element('DebugPopup', array('varToDisplay' => $this->request->data)); ?>
