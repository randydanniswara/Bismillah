<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kegiatan-form',
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
				<td width="200px;"><?php echo $form->labelEx($model,'nama'); ?></td>
				<td width=><?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?></td>
				<td width="300px;"><?php echo $form->error($model,'nama'); ?></td>
			</div>
		</tr>
		<tr>
			<div class="row">
				<td width="200px;"><?php echo $form->labelEx($model,'Tanggal Kegiatan'); ?></td>
				<td width=><?php $this->widget('zii.widgets.jui.CJuiDatePicker',
		     array(
		          'name'=>'Tanggal Kegiatan',
		          'attribute'=>'waktu_kegiatan', // Model attribute filed which hold user input
		          'model'=>$model,            // Model name
		          'value'=>date('Y-m-d'),
		          'htmlOptions'=>array('size'=>32),
		         )
		    );; ?></td>

			</div>
		</tr>
		<tr>
			<div class="row">
		<td><?php echo $form->labelEx($model,'deskripsi'); ?></td>
		<td><?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?></td>
		<td><?php echo $form->error($model,'deskripsi'); ?></td>
			</div>
		</tr>
	<!--
		<tr>
			<div class="row">
		<td><?php echo $form->labelEx($model,'Nama Lab'); ?></td>
		<td><?php echo $form->dropDownList($model,'id_lab',CHtml::listData(Lab::model()->findAll(),'id','nama'), array('empty'=>'Pilih Lab Anda!')); ?></td>
		<td><?php echo $form->error($model,'id_lab'); ?></td>
			</div>
		
		</tr>
	-->
		
			
		
	</table>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<div class="form form-buttons">
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->