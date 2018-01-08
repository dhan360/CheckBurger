<div class="detalleCombos view">
<h2><?php echo __('Detalle Combo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($detalleCombo['DetalleCombo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Combo'); ?></dt>
		<dd>
			<?php echo h($detalleCombo['DetalleCombo']['id_combo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Producto'); ?></dt>
		<dd>
			<?php echo h($detalleCombo['DetalleCombo']['id_producto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($detalleCombo['DetalleCombo']['cantidad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Combo'), array('action' => 'edit', $detalleCombo['DetalleCombo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Combo'), array('action' => 'delete', $detalleCombo['DetalleCombo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $detalleCombo['DetalleCombo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Combos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Combo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
