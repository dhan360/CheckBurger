<div class="periodos form">
<?php echo $this->Form->create('Periodo'); ?>
	<fieldset>
		<legend><?php echo __('Add Periodo'); ?></legend>
	<?php
		echo $this->Form->input('id_empresa');
		echo $this->Form->input('fecha_fin');
		echo $this->Form->input('estado');
		echo $this->Form->input('total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Periodos'), array('action' => 'index')); ?></li>
	</ul>
</div>
