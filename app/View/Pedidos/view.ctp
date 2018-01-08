<div class="pedidos view">
<h2><?php echo __('Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id User'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['id_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Periodo'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['id_periodo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Locale'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['id_locale']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pedido'), array('action' => 'edit', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pedido'), array('action' => 'delete', $pedido['Pedido']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pedido['Pedido']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?> </li>
	</ul>
</div>
