<div class="locales form">
<?php echo $this->Form->create('Locale'); ?>
	<fieldset>
		<legend><?php echo __('Edit Locale'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('id_tipos_locale');
		echo $this->Form->input('calle');
		echo $this->Form->input('numero');
		echo $this->Form->input('depto');
		echo $this->Form->input('villa');
		echo $this->Form->input('id_empresa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Locale.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Locale.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Locales'), array('action' => 'index')); ?></li>
	</ul>
</div>
