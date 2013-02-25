<div class="outputs view">
<h2><?php  echo __('Output');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($output['Output']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Biz Assist'); ?></dt>
		<dd>
			<?php echo $this->Html->link($output['Bizassist']['title'], array('controller' => 'bizassists', 'action' => 'view', $output['Bizassist']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($output['Project']['title'], array('controller' => 'projects', 'action' => 'view', $output['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($output['Optype']['title'], array('controller' => 'optypes', 'action' => 'view', $output['Optype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($output['Output']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($output['Opstatustype']['title'], array('controller' => 'opstatustypes', 'action' => 'view', $output['Opstatustype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action Date'); ?></dt>
		<dd>
			<?php echo h($output['Output']['actionDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evidence On File'); ?></dt>
		<dd>
			<?php echo h($output['Output']['evidenceOnFile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evidence Date'); ?></dt>
		<dd>
			<?php echo h($output['Output']['evidenceDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ModifiedDate'); ?></dt>
		<dd>
			<?php echo h($output['Output']['modifiedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($output['Output']['enabled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($output['Output']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evidence Required'); ?></dt>
		<dd>
			<?php echo h($output['Optype']['evidence']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Output'), 
									array('action' => 'edit', $output['Output']['id']),
									array('class' => 'cbAjax')); ?></li>
		<?php if (AuthComponent::user('role') == 'admin') { ?>
			<li><?php echo $this->Form->postLink(__('Delete Output'), array('action' => 'delete', $output['Output']['id']), null, __('Are you sure you want to delete # %s?', $output['Output']['id'])); ?> </li>
		<?php } ?>
<!--
		<li><?php echo $this->Html->link(__('List Outputs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bizassists'), array('controller' => 'bizassists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bizassist'), array('controller' => 'bizassists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Optypes'), array('controller' => 'optypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Optype'), array('controller' => 'optypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Opstatustypes'), array('controller' => 'opstatustypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opstatustype'), array('controller' => 'opstatustypes', 'action' => 'add')); ?> </li>
-->
	</ul>
</div>
