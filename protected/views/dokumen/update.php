<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);?>

<h3>Update Dokumen <?php echo $model->nama; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'lab'=>$lab)); ?>