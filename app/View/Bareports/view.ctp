<div class="bareports view">
<h2><?php  echo __('Bareport');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bareport['Bareport']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bareport['Company']['title'], array('controller' => 'companies', 'action' => 'view', $bareport['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bareport['Agent']['title'], array('controller' => 'agents', 'action' => 'view', $bareport['Agent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Engaged'); ?></dt>
		<dd>
			<?php echo h($bareport['Bareport']['engaged']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Completed'); ?></dt>
		<dd>
			<?php echo h($bareport['Bareport']['completed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Western Peninsula'); ?></dt>
		<dd>
			<?php echo h($bareport['Bareport']['westernPeninsula']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $bareport['Bareport']['id']), array('class' => 'cbAjax')); ?></li>
		<?php if (AuthComponent::user('role') == 'admin') { ?>
			<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $bareport['Bareport']['id']), null, __('Are you sure you want to delete # %s?', $bareport['Bareport']['id'])); ?> </li>
		<?php } ?>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Biz Assists'), array('controller' => 'bizassists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Types'), array('controller' => 'bastatustypes', 'action' => 'index')); ?> </li>
	</ul>
</div>

