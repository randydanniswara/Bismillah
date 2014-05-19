<?php
/* @var $this PesanController */
/* @var $data Pesan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pesan')); ?>:</b>
	<?php echo CHtml::encode($data->pesan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu')); ?>:</b>
	<?php echo CHtml::encode($data->waktu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sent')); ?>:</b>
	<?php echo CHtml::encode($data->id_sent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />


</div>