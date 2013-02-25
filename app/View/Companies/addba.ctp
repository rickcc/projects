<div class="companies form">
<?php echo $this->Form->create('Company');?>
	<fieldset>
		<legend><?php echo __('Add Biz Assist to Company'); ?></legend>
	<?php
		$newName = $this->request->data['Company']['title'] . " : BizAssist";
		
		echo $this->Form->hidden('Bizassist.id', array('default' => ''));
		echo $this->Form->hidden('Bizassist.iNetID', array('label' => 'iNet ID', 'default' => $this->request->data['Company']['iNetID']));
		echo $this->Form->hidden('Bizassist.company_id', array('default' => $this->request->data['Company']['id']));
		echo $this->Form->hidden('Bizassist.title', array('default' => $newName));
		echo $this->Form->hidden('Bizassist.enabled', array('default' => true));
		
		echo "<table>";
		echo $this->Html->tableCells(array(
			$this->Form->input('Bizassist.bastatustype_id', array('label' => 'Status')),
			$this->Form->input('Bizassist.agent_id', array('default' => $this->request->data['Company']['agent_id']))
			));
		echo "</table>";
	?>		
		<h3><?php echo __('Engagement Form');?></h3>
	<?php
	
		echo "<table>";
		echo $this->Html->tableCells(array(
			$this->Form->input('gotEngagement', array('type' => 'checkbox', 'label' => 'Have Engagement Form')),
			$this->Form->input('actionDate', array('type' => 'date', 'minYear' => 2010, 'maxYear' => '2015', 'label' => 'Form Signed On'))
			));
		echo $this->Html->tableCells(array(
			$this->Form->input('evidenceOnFile', array('type' => 'checkbox', 'label' => 'Evidence On File in iNet Office')),
			$this->Form->input('evidenceDate', array('type' => 'date', 'empty' => '', 'default' => '', 'minYear' => 2010, 'maxYear' => '2015', 'label' => 'Date Filed in iNet Office'))
			));
		echo "</table>";


		echo "<table>";
		echo $this->Html->tableCells(array(
		 	$this->Form->input('newCompanyInRegion', array('type' => 'checkbox', 'label' => 'New to Region')),
			$this->Form->input('newCompanyInNetwork', array('type' => 'checkbox', 'label' => 'New to Network', 'default' => true)),
			$this->Form->input('envCompany', array('type' => 'checkbox', 'label' => 'Environmental Company'))
			));
		echo "</table>";

		echo $this->Form->input('Bizassist.details');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<?php echo $this->element('DebugPopup', array('varToDisplay' => $this->request->data)); ?>
