<?php
/* @var $this AsetController */
/* @var $model Aset */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'aset-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>

	<table>
		<?php echo $form->errorSummary($model); ?>
		<tr>
			<div class="row">
				<td width="200px"><?php echo $form->labelEx($model,'nama'); ?>
				<td><?php echo $form->textField($model,'nama',array('size'=>30,'maxlength'=>30)); ?>
				<td width="300px"><?php echo $form->error($model,'nama'); ?>
			</div>
		</tr>
		<tr>
			<div class="row">
				<td><?php echo $form->labelEx($model,'jumlah'); ?>
				<td><?php echo $form->textField($model,'jumlah'); ?>
				<td><?php echo $form->error($model,'jumlah'); ?>
			</div>
		</tr>
		<tr>
			<div class="row">
				<td><?php echo $form->labelEx($model,'tahun'); ?>
				<td><?php echo $form->textField($model,'tahun'); ?>
				<td><?php echo $form->error($model,'tahun'); ?>
			</div>
		</tr>
		<tr>
			<div class="row">
				<td><?php echo $form->labelEx($model,'Nama Lab'); ?>
				<td><?php echo $form->textField($model,'id_lab',array('value'=>$lab->nama,'disabled'=>'disabled'))?>
				<td><?php echo $form->error($model,'id_lab'); ?>
			</div>
		</tr>
	</table>

		<p class="note">Fields with <span class="required">*</span> are required.</p>
		
	<div class="form form-buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->