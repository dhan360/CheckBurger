<div class="suscripciones form">
<?php echo $this->Form->create('Suscripcione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Suscripcione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_empresa');
		echo $this->Form->input('id_tipos_suscripcione');
		echo $this->Form->input('inicio');
		echo $this->Form->input('fin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Suscripcione.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Suscripcione.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Suscripciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
