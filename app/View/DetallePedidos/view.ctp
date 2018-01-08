<div class="detallePedidos view">
<h2><?php echo __('Detalle Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($detallePedido['DetallePedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Pedido'); ?></dt>
		<dd>
			<?php echo h($detallePedido['DetallePedido']['id_pedido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Producto'); ?></dt>
		<dd>
			<?php echo h($detallePedido['DetallePedido']['id_producto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio Unitario'); ?></dt>
		<dd>
			<?php echo h($detallePedido['DetallePedido']['precio_unitario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($detallePedido['DetallePedido']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($detallePedido['DetallePedido']['total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Pedido'), array('action' => 'edit', $detallePedido['DetallePedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Pedido'), array('action' => 'delete', $detallePedido['DetallePedido']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $detallePedido['DetallePedido']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Pedido'), array('action' => 'add')); ?> </li>
	</ul>
</div>
