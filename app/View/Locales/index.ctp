<div class="locales index">
	<h2><?php echo __('Locales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('id_tipos_locale'); ?></th>
			<th><?php echo $this->Paginator->sort('calle'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('depto'); ?></th>
			<th><?php echo $this->Paginator->sort('villa'); ?></th>
			<th><?php echo $this->Paginator->sort('id_empresa'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($locales as $locale): ?>
	<tr>
		<td><?php echo h($locale['Locale']['id']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['id_tipos_locale']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['calle']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['numero']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['depto']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['villa']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['id_empresa']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $locale['Locale']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $locale['Locale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $locale['Locale']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $locale['Locale']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Locale'), array('action' => 'add')); ?></li>
	</ul>
</div>
