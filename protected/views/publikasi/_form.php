<?php
/* @var $this PublikasiController */
/* @var $model Publikasi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'publikasi-form',
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
				<td><?php echo $form->labelEx($model,'tahun'); ?>
				<td>
					<select name="Publikasi[tahun]" id="Publikasi_tahun">
						<?php for ($i = intval(date('Y'));$i>=1945;--$i) {?>
							<option value="<?php echo $i;?>"><?php echo $i;?></option>
						<?php } ?>
					</select>
				<td><?php echo $form->error($model,'tahun'); ?>
			</div>
		</tr>
		<tr>
			<div class="row">
				<td><?php echo $form->labelEx($model,'pengarang'); ?>
				<td><?php echo $form->textField($model,'pengarang',array('size'=>60,'maxlength'=>100)); ?>
				<td><?php echo $form->error($model,'pengarang'); ?>
			</div>
		</tr>
		<tr>
			<div class="row">
			<td><?php echo $form->labelEx($model,'File Publikasi'); ?>
				<span style="color:blue;">pastikan nama file <br>sesuai dengan isi <br>file yang diunggah</span><br>
			<td><?php echo $form->fileField($model,'judul'); ?>
			<td><?php echo $form->error($model,'judul'); ?>
			</div>
			
	</tr>
	<tr>
		<div class="row">
			<td><?php echo $form->labelEx($model,'Nama Lab'); ?>
			<td><?php echo $form->textField($model,'id_lab',array('value'=>$lab->nama,'disabled'=>'disabled')); ?>
			<td><?php echo $form->error($model,'id_lab'); ?>
		</div>
	</tr>
</table>


	<div class="form form-buttons">
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->