<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'user-form',
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
				<td width="100px;"><?php echo $form->labelEx($model,'username'); ?></td>
				<td width="250px"><?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30)); ?></td>
				<td width="200px;"><?php echo $form->error($model,'username'); ?></td>
			</div>
		</tr>
		<tr>
			<div class="row">
				<td><?php echo $form->labelEx($model,'new password'); ?></td>
				<td><?php echo $form->passwordField($model,'password',array('size'=>30,'maxlength'=>40)); ?></td>
				<td><?php echo $form->error($model,'password'); ?></td>
			</div>
		</tr>
		<tr>
			<div class="row">
				<td><?php echo $form->labelEx($model,'verify password'); ?></td>
				<td><?php echo $form->passwordField($model,'samePassword',array('size'=>30,'maxlength'=>40)); ?></td>
				<td><?php echo $form->error($model,'samePassword'); ?></td>
			</div>
		</tr>
		<tr>
			<div class="row">
				<td><?php echo $form->labelEx($model,'email'); ?></td>
				<td><?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>40)); ?></td>
				<td><?php echo $form->error($model,'email'); ?></td>
			</div>
		</tr>
		<tr>
			<div class="row">
				<td><?php echo $form->labelEx($model,'role'); ?></td>
				<td><?php echo $form->dropDownList($model,'role', array(1=>"Admin",2=>"Ketua",3=>"Anggota")); ?></td>
				<td><?php echo $form->error($model,'role'); ?></td>
			</div>
		</tr>
		<tr>
		    <div class="row">
				<td><?php echo $form->labelEx($lab,'id_lab'); ?></td>
				<td><?php echo $form->dropDownList($lab,'id_lab',CHtml::listData(Lab::model()->findAll(),'id','nama'), array('empty'=>'Pilih Lab Anda!', )); ?></td>
				<td><?php echo $form->error($lab,'id_lab'); ?></td>
			</div>
		</tr>
		
			
		
	</table>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="form-buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->