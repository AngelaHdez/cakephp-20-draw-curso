<div class="alumnos form">
<?php echo $this->Form->create('Alumno');?>
	<fieldset>
		<legend><?php echo __('Admin Add Alumno'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('primer_apellido');
		echo $this->Form->input('segundo_apellido');
		echo $this->Form->input('email');
		echo $this->Form->input('telefono');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Alumnos'), array('action' => 'index'));?></li>
	</ul>
</div>
