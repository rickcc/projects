<div class="companies view">
<h2><?php  echo __('Company');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('INet ID'); ?></dt>
		<dd>
			<?php echo h($company['Company']['iNetID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($company['Company']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($company['Company']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Code'); ?></dt>
		<dd>
			<?php echo h($company['Company']['postCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Western Peninsula'); ?></dt>
		<dd>
			<?php echo h($company['Company']['westernPeninsula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($company['Agent']['title'], array('controller' => 'agents', 'action' => 'view', $company['Agent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($company['Company']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($company['Company']['modifiedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo $this->element('tickcross', array('boolValue' => $company['Company']['enabled'])); ?>
			<?php //echo h($company['Company']['enabled']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id']), array('class' => 'cbAjax')); ?></li>
		<?php if (AuthComponent::user('role') == 'admin') { ?>
			<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), null, __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<?php } ?>
		<li>&nbsp;</li>
		<li><?php echo $this->Form->postLink(__('Update Report'), array('action' => 'bareport', $company['Company']['id']), null); ?></li>
		<?php if (AuthComponent::user('role') == 'admin') { ?>
			<li><?php echo $this->Form->postLink(__('Report Forecast'), array('action' => 'bareport', $company['Company']['id'], 'Forecast'), null); ?> </li>
			<li><?php echo $this->Form->postLink(__('Report Actual'), array('action' => 'bareport', $company['Company']['id'], 'Actual'), null); ?> </li>
			<li><?php echo $this->Form->postLink(__('Report Total'), array('action' => 'bareport', $company['Company']['id'], 'Total'), null); ?> </li>
			<li>&nbsp;</li>
			<li><?php echo $this->Html->link(__('Fast Add Proj'), array('action' => 'addproj', $company['Company']['id']), null); ?></li>
			<li><?php echo $this->Html->link(__('Fast Add Proj popup'), array('action' => 'addproj', $company['Company']['id']), array('class' => 'cbAjax')); ?></li>
		<?php } ?>		<li>&nbsp;</li>
		<li>&nbsp;</li>
	</ul>
</div>

<?php echo $this->element('DebugPopup', array('varToDisplay' => $company)); ?>

<div class="related">
	<h3><?php echo __('Related Bizassists');?></h3>
	<?php if (!empty($company['Bizassist'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="actions"><?php echo __('Actions');?></th>
		<th><?php echo __('iNet ID'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Agent'); ?></th>
		<th><?php echo __('Enabled'); ?></th>
		<th><?php echo __('Outputs'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Bizassist'] as $bizassist): ?>
		<tr>
			<td class="actions">
				<?php echo $this->Html->link(__('Details'), array('controller' => 'bizassists', 'action' => 'view', $bizassist['id'])); ?>
			</td>
			<td><?php echo $bizassist['iNetID'];?></td>
			<td><?php echo $bizassist['title'];?></td>
			<td><?php echo $bizassist['Bastatustype']['title'];?></td>
			<td><?php echo $bizassist['Agent']['title'];?></td>
			<td><?php echo $bizassist['enabled'];?></td>
			<td class="actions">
				<?php $opCount = count( $bizassist['Output'] );?>
				<?php echo $this->Html->link(__("Show ($opCount)"), array('controller' => 'bizassists', 'action' => 'quickview', $bizassist['id']), array('class' => 'cbAjax')); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bizassist'), array('action' => 'addba', $company['Company']['id']), array('class' => 'cbAjax')); ?></li>
			<!--
			<li><?php echo $this->Html->link(__('New Bizassist (old)'), 
									array('controller' => 'bizassists', 'action' => 'add', 'company_id' => $company['Company']['id']),
									array('class' => 'cbAjax')); ?> </li>
			-->
		</ul>
	</div>
	
</div>
<div class="related">
	<h3><?php echo __('Related Projects');?></h3>
	<?php if (!empty($company['Project'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="actions"><?php echo __('Actions');?></th>
		<th><?php echo __('iNet ID'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Agent'); ?></th>
		<th><?php echo __('Enabled'); ?></th>
		<th><?php echo __('Outputs'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Project'] as $project): ?>
		<tr>
			<td class="actions">
				<?php echo $this->Html->link(__('Details'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
			</td>
			<td><?php echo $project['iNetID'];?></td>
			<td><?php echo $project['title'];?></td>
			<td><?php echo $project['Bastatustype']['title'];?></td>
			<td><?php echo $project['Agent']['title'];?></td>
			<td><?php echo $project['enabled'];?></td>
			<td class="actions">
				<?php $opCount = count( $project['Output'] );?>
				<?php echo $this->Html->link(__("Show ($opCount)"), array('controller' => 'projects', 'action' => 'quickview', $project['id']), array('class' => 'cbAjax')); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('action' => 'addproj', $company['Company']['id']), array('class' => 'cbAjax')); ?></li>
			<!--
			<li><?php echo $this->Html->link(__('New Project (old)'), 
									array('controller' => 'projects', 'action' => 'add', 'company_id' => $company['Company']['id']),
									array('class' => 'cbAjax')); ?> </li>
			-->
		</ul>
	</div>
</div>

<?php //if (AuthComponent::user('role') == 'admin') { ?>

<div class="related">
	<h3><?php echo __('Reporting Status - Actuals');?></h3>
	<?php if (!empty($company['Bareport'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="actions"><?php echo __('Actions');?></th>
		<th><?php echo __('Report Type'); ?></th>
		<th><?php echo __('Engaged'); ?></th>
		<th><?php echo __('> 6 hours'); ?></th>
		<th><?php echo __('Completed'); ?></th>
		<th><?php echo __('Env. Business');?></th>
		<th><?php echo __('New In Network');?></th>
		<th><?php echo __('New Business');?></th>
		<th><?php echo __('Western Peninsula'); ?></th>
		<th><?php echo __('Agent'); ?></th>
	</tr>
	<?php
		$i = 0;
		$bareport = $company['Bareport'];
		//foreach ($company['Bareport'] as $bareport): ?>
		<tr>
			<td class="actions">
				<?php echo $this->Html->link(__('Details'), array('controller' => 'bareports', 'action' => 'view', $bareport['id'])); ?>
			</td>
			<td><?php echo $bareport['lineType'];?></td>
			<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['engaged'])); ?></td>
			<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['done6hours'])); ?></td>
			<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['completed'])); ?></td>
			<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['envBusiness'])); ?></td>
			<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['newToNetwork'])); ?></td>
			<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['newToRegion'])); ?></td>
			<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['westernPeninsula'])); ?></td>
			<td><?php if (!empty($bareport['Agent'])) { echo $bareport['Agent']['title']; }?></td>
		</tr>
	<?php //endforeach; ?>
	</table>
	<h3><?php echo __('Reporting Status - Forecast + Actuals');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="actions"><?php echo __('Actions');?></th>
		<th><?php echo __('Projects'); ?></th>
		<th><?php echo __('SRBs'); ?></th>
		<th><?php echo __('New Jobs'); ?></th>
		<th><?php echo __('Safeguarded Jobs'); ?></th>
		<th><?php echo __('New Research Jobs'); ?></th>
		<th><?php echo __('Safeguarded Research Jobs'); ?></th>
		<th><?php echo __('IPR Devices'); ?></th>
		<th><?php echo __('New Products'); ?></th>
		<th><?php echo __('Collaborative Projects'); ?></th>
		<th><?php echo __('Increased GVA'); ?></th>
	</tr>
	<?php
		$i = 0;
		$bareport = $company['Bareport'];
		//foreach ($company['Bareport'] as $bareport): ?>
		<tr>
			<td class="actions">
				<?php echo $this->Html->link(__('Details'), array('controller' => 'bareports', 'action' => 'view', $bareport['id'])); ?>
			</td>
			<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['hadProject'])); ?></td>
			<td><?php echo $this->element('tickcross', array('boolValue' => $bareport['hadSRB'])); ?></td>
			<td><?php echo $bareport['newJobs'];?></td>
			<td><?php echo $bareport['sgJobs'];?></td>
			<td><?php echo $bareport['newRJobs'];?></td>
			<td><?php echo $bareport['sgRJobs'];?></td>
			<td><?php echo $bareport['iprUsed'];?></td>
			<td><?php echo $bareport['newProducts'];?></td>
			<td><?php echo $bareport['collabBiz'];?></td>
			<td><?php echo $bareport['increasedGVA'];?></td>
		</tr>
	<?php //endforeach; ?>
	</table>
<?php endif; ?>
</div>

<?php //} ?>
