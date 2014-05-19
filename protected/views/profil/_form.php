<?php
/* @var $this ProfilController */
/* @var $model Profil */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profil-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=> array(
		'enctype'=>'multipart/form-data',
	),
)); ?>

	
<table>

	<?php echo $form->errorSummary($model); ?>
	
	<tr>
		<div class="row">
			<td><?php echo $form->labelEx($model,'nama_depan'); ?>
			<td><?php echo $form->textField($model,'nama_depan',array('size'=>20,'maxlength'=>20)); ?>
			<td><?php echo $form->error($model,'nama_depan'); ?>
		</div>
	</tr>
	<tr>
		<div class="row">
			<td><?php echo $form->labelEx($model,'nama_belakang'); ?>
			<td><?php echo $form->textField($model,'nama_belakang',array('size'=>20,'maxlength'=>20)); ?>
			<td><?php echo $form->error($model,'nama_belakang'); ?>
		</div>
	</tr>
	<tr>
		<div class="row">
			<td><?php echo $form->labelEx($model,'ttl'); ?>
			<td><?php
				$this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
			          'name'=>'ttl',
			          'attribute'=>'ttl', // Model attribute filed which hold user input
			          'model'=>$model,            // Model name
			          'value'=>date('Y-m-d'),
			          'htmlOptions'=>array('size'=>32),
			         )
			    );?>
			<td><?php echo $form->error($model,'ttl'); ?>
		</div>
	</tr>
	<tr>
		<div class="row">
			<td><?php echo $form->labelEx($model,'alamat'); ?>
			<td><?php echo $form->textArea($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
			<td><?php echo $form->error($model,'alamat'); ?>
		</div>
	</tr>
	<tr>
		<div class="row">
			<td><?php echo $form->labelEx($model,'telp'); ?>
			<td><?php echo $form->textField($model,'telp',array('size'=>15,'maxlength'=>15)); ?>
			<td><?php echo $form->error($model,'telp'); ?>
		</div>
	</tr>
	<tr>
		<div class="row">
			<td><?php echo $form->labelEx($model,'avatar'); ?>
			<td><?php echo $form->fileField($model,'avatar'); ?>
			<td><?php echo $form->error($model,'avatar'); ?>
		</div>
	</tr>
</table>

<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="form form-buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->