<div class="locales view">
<h2><?php echo __('Locale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locale['Locale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($locale['Locale']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Tipos Locale'); ?></dt>
		<dd>
			<?php echo h($locale['Locale']['id_tipos_locale']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calle'); ?></dt>
		<dd>
			<?php echo h($locale['Locale']['calle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($locale['Locale']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Depto'); ?></dt>
		<dd>
			<?php echo h($locale['Locale']['depto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Villa'); ?></dt>
		<dd>
			<?php echo h($locale['Locale']['villa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Empresa'); ?></dt>
		<dd>
			<?php echo h($locale['Locale']['id_empresa']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locale'), array('action' => 'edit', $locale['Locale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locale'), array('action' => 'delete', $locale['Locale']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $locale['Locale']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Locales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locale'), array('action' => 'add')); ?> </li>
	</ul>
</div>
