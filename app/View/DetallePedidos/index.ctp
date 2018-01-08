<div class="detallePedidos index">
	<h2><?php echo __('Detalle Pedidos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('id_producto'); ?></th>
			<th><?php echo $this->Paginator->sort('precio_unitario'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($detallePedidos as $detallePedido): ?>
	<tr>
		<td><?php echo h($detallePedido['DetallePedido']['id']); ?>&nbsp;</td>
		<td><?php echo h($detallePedido['DetallePedido']['id_pedido']); ?>&nbsp;</td>
		<td><?php echo h($detallePedido['DetallePedido']['id_producto']); ?>&nbsp;</td>
		<td><?php echo h($detallePedido['DetallePedido']['precio_unitario']); ?>&nbsp;</td>
		<td><?php echo h($detallePedido['DetallePedido']['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($detallePedido['DetallePedido']['total']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detallePedido['DetallePedido']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detallePedido['DetallePedido']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detallePedido['DetallePedido']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $detallePedido['DetallePedido']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Detalle Pedido'), array('action' => 'add')); ?></li>
	</ul>
</div>
