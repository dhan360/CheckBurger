<div class="detalleCombos form">
<?php echo $this->Form->create('DetalleCombo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Detalle Combo'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleCombo.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DetalleCombo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Combos'), array('action' => 'index')); ?></li>
	</ul>
</div>
