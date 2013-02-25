<div class="bareports index">
	<h2><?php echo __('Outputs Report');?></h2>

	<?php echo $this->element('FilterPopup'); ?>

	<div id="tabs" class="ui-tabs-nav">
    <ul>
        <li><a href="#tabs-1">Business Assist Outputs</a></li>
        <li><a href="#tabs-2">Jobs Outputs</a></li>
        <li><a href="#tabs-3">Other Outputs</a></li>
    </ul>
    <div id="tabs-1">

	<table cellpadding="0" cellspacing="0">
	<tr>
		<?php if (!$hiderows) { ?>
			<th><?php echo $this->Paginator->sort('iNetID', 'iNet ID');?></th>
			<th><?php echo $this->Paginator->sort('company_id');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
		<?php } ?>
			<th><?php echo $this->Paginator->sort('engaged', 'Signed Engagement Form');?></th>
			<th><?php echo $this->Paginator->sort('done6hours', '> 6 hours complete');?></th>
			<th><?php echo $this->Paginator->sort('completed', 'Signed Evidence Form');?></th>
			<th><?php echo $this->Paginator->sort('envBusiness', 'Env. Business');?></th>
			<th><?php echo $this->Paginator->sort('newToNetwork', 'New In Network');?></th>
			<th><?php echo $this->Paginator->sort('newToRegion', 'New Business');?></th>
			<th><?php echo $this->Paginator->sort('westernPeninsula', 'Western Peninsula');?></th>
		<?php if (!$hiderows) { ?>
			<th><?php echo $this->Paginator->sort('agent_id');?></th>
		<?php } ?>
	</tr>
	<?php
	$i = 0;
	$col101 = $col102 = $col103 = $col104 = $col105 = $col106 = $col107 = $col108 = $col109 = $col110 = "";
	$col201 = $col202 = $col203 = $col204 = $col205 = $col206 = $col207 = $col208 = $col209 = $col210 = "";
	$col301 = $col302 = $col303 = $col304 = $col305 = $col306 = $col307 = $col308 = $col309 = $col310 = "";
	
	foreach ($bareports as $bareport):
		$col101 += $bareport['Bareport']['engaged'];
		$col107 += $bareport['Bareport']['done6hours'];
		$col102 += $bareport['Bareport']['completed'];
		$col103 += $bareport['Bareport']['envBusiness'];
		$col104 += $bareport['Bareport']['newToNetwork'];
		$col105 += $bareport['Bareport']['newToRegion'];
		$col106 += $bareport['Bareport']['westernPeninsula'];
	
	if (!$hiderows) { ?>
	<tr>
		<td><?php echo h($bareport['Company']['iNetID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bareport['Company']['title'], array('controller' => 'companies', 'action' => 'view', $bareport['Company']['id'])); ?>
		</td>
		<td><?php echo h($bareport['Bareport']['status']); ?>&nbsp;</td>
		<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['Bareport']['engaged'])); ?></td>
		<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['Bareport']['done6hours'])); ?></td>
		<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['Bareport']['completed'])); ?></td>
		<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['Bareport']['envBusiness'])); ?></td>
		<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['Bareport']['newToNetwork'])); ?></td>
		<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['Bareport']['newToRegion'])); ?></td>
		<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['Bareport']['westernPeninsula'])); ?></td>
		<td>
			<?php echo $this->Html->link($bareport['Agent']['title'], array('controller' => 'agents', 'action' => 'view', $bareport['Agent']['id'])); ?>
		</td>
	</tr>
	<?php } ?>
	<?php endforeach; ?>
	<tr>
		<?php if (!$hiderows) { ?>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		<?php } ?>
			<th><?php echo $col101;?></th>
			<th><?php echo $col107;?></th>
			<th><?php echo $col102;?></th>
			<th><?php echo $col103;?></th>
			<th><?php echo $col104;?></th>
			<th><?php echo $col105;?></th>
			<th><?php echo $col106;?></th>
		<?php if (!$hiderows) { ?>
			<th>&nbsp;</th>
		<?php } ?>
	</tr>
	</table>
	
	</div> <!-- tab 1 -->
    <div id="tabs-2">
    
	<table cellpadding="0" cellspacing="0">
	<tr>
		<?php if (!$hiderows) { ?>
			<th><?php echo $this->Paginator->sort('iNetID', 'iNet ID');?></th>
			<th><?php echo $this->Paginator->sort('company_id');?></th>
		<?php } ?>
			<th><?php echo $this->Paginator->sort('hadProject', 'Had a Project');?></th>
			<th><?php echo $this->Paginator->sort('hadSRB', 'Had an SRB');?></th>
			<th><?php echo $this->Paginator->sort('newJobs', 'New Jobs');?></th>
			<th><?php echo $this->Paginator->sort('sgJobs', 'Safeguarded Jobs');?></th>
			<th><?php echo $this->Paginator->sort('newRJobs', 'New Research jobs');?></th>
			<th><?php echo $this->Paginator->sort('sgRJobs', 'Safeguarded Research Jobs');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bareports as $bareport):
		$col201 += $bareport['Bareport']['hadProject'];
		$col202 += $bareport['Bareport']['hadSRB'];
		$col203 += $bareport['Bareport']['newJobs'];
		$col204 += $bareport['Bareport']['sgJobs'];
		$col205 += $bareport['Bareport']['newRJobs'];
		$col206 += $bareport['Bareport']['sgRJobs'];
	
	if (!$hiderows) { ?>
	<tr>
		<td><?php echo h($bareport['Company']['iNetID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bareport['Company']['title'], array('controller' => 'companies', 'action' => 'view', $bareport['Company']['id'])); ?>
		</td>
		<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['Bareport']['hadProject'])); ?></td>
		<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['Bareport']['hadSRB'])); ?></td>
		<td><?php echo h($bareport['Bareport']['newJobs']); ?>&nbsp;</td>
		<td><?php echo h($bareport['Bareport']['sgJobs']); ?>&nbsp;</td>
		<td><?php echo h($bareport['Bareport']['newRJobs']); ?>&nbsp;</td>
		<td><?php echo h($bareport['Bareport']['sgRJobs']); ?>&nbsp;</td>
	</tr>
	<?php } ?>
	<?php endforeach; ?>
	<tr>
		<?php if (!$hiderows) { ?>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		<?php } ?>
			<th><?php echo $col201;?></th>
			<th><?php echo $col202;?></th>
			<th><?php echo $col203;?></th>
			<th><?php echo $col204;?></th>
			<th><?php echo $col205;?></th>
			<th><?php echo $col206;?></th>
	</tr>
	</table>
	
    </div> <!-- tab 2 -->
    <div id="tabs-3">
    
	<table cellpadding="0" cellspacing="0">
	<tr>
		<?php if (!$hiderows) { ?>
			<th><?php echo $this->Paginator->sort('iNetID', 'iNet ID');?></th>
			<th><?php echo $this->Paginator->sort('company_id');?></th>
		<?php } ?>
			<th><?php echo $this->Paginator->sort('hadProject', 'Had a Project');?></th>
			<th><?php echo $this->Paginator->sort('hadSRB', 'Had an SRB');?></th>
			<th><?php echo $this->Paginator->sort('iprUsed', 'IPR Devices');?></th>
			<th><?php echo $this->Paginator->sort('newProducts', 'New Products');?></th>
			<th><?php echo $this->Paginator->sort('collabBiz', 'Collaborative Projects');?></th>
			<th><?php echo $this->Paginator->sort('increasedGVA', 'Increased GVA');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bareports as $bareport):
		$col301 += $bareport['Bareport']['hadProject'];
		$col302 += $bareport['Bareport']['hadSRB'];
		$col303 += $bareport['Bareport']['iprUsed'];
		$col304 += $bareport['Bareport']['newProducts'];
		$col305 += $bareport['Bareport']['collabBiz'];
		$col306 += $bareport['Bareport']['increasedGVA'];
	
	if (!$hiderows) { ?>
	<tr>
		<td><?php echo h($bareport['Company']['iNetID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bareport['Company']['title'], array('controller' => 'companies', 'action' => 'view', $bareport['Company']['id'])); ?>
		</td>
		<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['Bareport']['hadProject'])); ?></td>
		<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['Bareport']['hadSRB'])); ?></td>
		<td><?php echo h($bareport['Bareport']['iprUsed']); ?>&nbsp;</td>
		<td><?php echo h($bareport['Bareport']['newProducts']); ?>&nbsp;</td>
		<td><?php echo h($bareport['Bareport']['collabBiz']); ?>&nbsp;</td>
		<td><?php echo h($bareport['Bareport']['increasedGVA']); ?>&nbsp;</td>
	</tr>
	<?php } ?>
	<?php endforeach; ?>
	<tr>
		<?php if (!$hiderows) { ?>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		<?php } ?>
			<th><?php echo $col301;?></th>
			<th><?php echo $col302;?></th>
			<th><?php echo $col303;?></th>
			<th><?php echo $col304;?></th>
			<th><?php echo $col305;?></th>
			<th><?php echo $col306;?></th>
	</tr>
	</table>
	
    </div> <!-- tab 3 -->

	<p>
	<?php
	
	if (!$hiderows) { 
	
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
	<?php } ?>
	
	</div> <!-- tabs -->

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Totals Only'), array('action' => 'summary')); ?> </li>
		<li><?php echo $this->Html->link(__('Show Details'), array('action' => 'index')); ?> </li>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('Update All'), array('action' => 'runAll')); ?> </li>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('Export BA Status'), array('action' => 'index', 'export')); ?> </li>
		<li><?php echo $this->Html->link(__('Export Full Report'), array('action' => 'index', 'exportAll')); ?> </li>
	</ul>
</div>
<?php echo $this->element('DebugPopup', array('varToDisplay' => $bareports)); ?>
<?php //echo $this->element('DebugPopup', array('varToDisplay' => $results)); ?>
