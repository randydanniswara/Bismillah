<?php
/* @var $this LabController */
/* @var $model Lab */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'lab-form',
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
				<td width="100px"><?php echo $form->labelEx($model,'nama'); ?></td>
				<td width="250px"><?php echo $form->textField($model,'nama',array('size'=>40,'maxlength'=>50)); ?></td>
				<td width="200px"><?php echo $form->error($model,'nama'); ?></td>
			</div>
		</tr>
		<tr>
			<div class="row">
				<td><?php echo $form->labelEx($model,'profil'); ?></td>
				<td><?php echo $form->textArea($model,'profil',array('rows'=>6, 'cols'=>40)); ?></td>
				<td><?php echo $form->error($model,'profil'); ?></td>
			</div>
		</tr>
		<tr>
			<div class="row">
				<td><?php echo $form->labelEx($model,'ketua Lab'); ?></td>
				<td><?php echo $form->dropDownList($model,'id_ketua',$list, array('empty'=>'Pilih ketua Lab Anda!')); ?></td>
				<td><?php echo $form->error($model,'id_ketua'); ?></td>
			</div>
		</tr>
		
	</table>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<div class="form-buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->