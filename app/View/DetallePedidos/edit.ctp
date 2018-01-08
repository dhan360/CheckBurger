<div class="detallePedidos form">
<?php echo $this->Form->create('DetallePedido'); ?>
	<fieldset>
		<legend><?php echo __('Edit Detalle Pedido'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_pedido');
		echo $this->Form->input('id_producto');
		echo $this->Form->input('precio_unitario');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetallePedido.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DetallePedido.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Pedidos'), array('action' => 'index')); ?></li>
	</ul>
</div>
