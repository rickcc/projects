<div class="outputs view">
<h2><?php  echo __('Dashboard');?></h2>

<?php 

if (!empty($companies)):
	echo "<h3>" . __('Disabled Companies') . "</h3>";
	echo $this->element('defaultTable', array('findResults' => $companies));
endif; 

if (!empty($projects)):
	echo "<h3>" . __('Disabled Projects') . "</h3>";
	echo $this->element('defaultTable', array('findResults' => $projects));
endif; 

if (!empty($bizassists)):
	echo "<h3>" . __('Disabled Biz Assists') . "</h3>";
	echo $this->element('defaultTable', array('findResults' => $bizassists));
endif; 

if (!empty($outputs)):
	echo "<h3>" . __('Disabled Outputs') . "</h3>";
	echo $this->element('defaultTable', array('findResults' => $outputs));
endif; 


?>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('All Outputs'), array('action' => 'report_outputs')); ?> </li>
		<li><?php echo $this->Html->link(__('Actual Outputs'), array('action' => 'report_outputs', 'Actual')); ?> </li>
		<li><?php echo $this->Html->link(__('Forecast Outputs'), array('action' => 'report_outputs', 'Forecast')); ?> </li>
		<li><?php echo $this->Html->link(__('BizAssist All Outputs'), array('action' => 'report_ba')); ?> </li>
		<li><?php echo $this->Html->link(__('BizAssist Actual Outputs'), array('action' => 'report_ba', 'Actual')); ?> </li>
		<li><?php echo $this->Html->link(__('BizAssist Forecast Outputs'), array('action' => 'report_ba', 'Forecast')); ?> </li>
		<li><?php echo $this->Html->link(__('Projects All Outputs'), array('action' => 'report_projects')); ?> </li>
		<li><?php echo $this->Html->link(__('Projects Actual Outputs'), array('action' => 'report_projects', 'Actual')); ?> </li>
		<li><?php echo $this->Html->link(__('Projects Forecast Outputs'), array('action' => 'report_projects', 'Forecast')); ?> </li>
	</ul>
</div>

<?php echo $this->element('DebugPopup', array('varToDisplay' => $companies, 'label' => 'Debug Companies')); ?>
<?php echo $this->element('DebugPopup', array('varToDisplay' => $bizassists, 'label' => 'Debug Bizassists')); ?>
<?php echo $this->element('DebugPopup', array('varToDisplay' => $projects, 'label' => 'Debug Projects')); ?>
<?php echo $this->element('DebugPopup', array('varToDisplay' => $outputs, 'label' => 'Debug Outputs')); ?>

