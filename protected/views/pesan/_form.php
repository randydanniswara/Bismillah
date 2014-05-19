<?php
/* @var $this PesanController */
/* @var $model Pesan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pesan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>20, 'cols'=>50)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>


	<div class="row">
		<?php $pesan = new PesanUser; ?>
		<?php echo $form->labelEx($pesan,'Penerima'); ?>
		<?php echo Select2::multiSelect('Recipient',null,
			$list, array(
				'required' => 'required',
		        'placeholder' => 'Penerima',
		        'style'=> 'width:100%;',
		        'select2Options' => array(
		            'maximumSelectionSize' => sizeof($list),
		        ),
			)
		); ?>
		<?php echo $form->error($pesan,'id_receive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pesan'); ?>
		<?php echo $form->textArea($model,'pesan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pesan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->