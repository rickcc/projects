<div class="outputs view">
<h2><?php  echo __('Dashboard');?></h2>

<?php if (!empty($outputs)):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($outputs as $output): ?>
		<tr>
			<td><?php echo $output['Optype']['Type'];?></td>
			<td><?php echo $output['Opstatustype']['Status'];?></td>
			<td><?php echo $output['Output']['Quantity'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

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
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('Disabled entries'), array('action' => 'report_disabled')); ?> </li>
	</ul>
</div>

<?php echo $this->element('DebugPopup', array('varToDisplay' => $outputs)); ?>

