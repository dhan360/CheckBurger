<div class="suscripciones view">
<h2><?php echo __('Suscripcione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($suscripcione['Suscripcione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Empresa'); ?></dt>
		<dd>
			<?php echo h($suscripcione['Suscripcione']['id_empresa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Tipos Suscripcione'); ?></dt>
		<dd>
			<?php echo h($suscripcione['Suscripcione']['id_tipos_suscripcione']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio'); ?></dt>
		<dd>
			<?php echo h($suscripcione['Suscripcione']['inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin'); ?></dt>
		<dd>
			<?php echo h($suscripcione['Suscripcione']['fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($suscripcione['Suscripcione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($suscripcione['Suscripcione']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Suscripcione'), array('action' => 'edit', $suscripcione['Suscripcione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Suscripcione'), array('action' => 'delete', $suscripcione['Suscripcione']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $suscripcione['Suscripcione']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Suscripciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suscripcione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
