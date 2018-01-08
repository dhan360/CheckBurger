<div class="detalleCombos form">
<?php echo $this->Form->create('DetalleCombo'); ?>
	<fieldset>
		<legend><?php echo __('Add Detalle Combo'); ?></legend>
	<?php
		echo $this->Form->input('id_combo');
		echo $this->Form->input('id_producto');
		echo $this->Form->input('cantidad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Combos'), array('action' => 'index')); ?></li>
	</ul>
</div>
