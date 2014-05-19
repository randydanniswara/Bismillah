<?php
/* @var $this AsetController */
/* @var $model Aset */

$this->breadcrumbs=array(
	'Asets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);?>

<h3>Update Aset <?php echo $model->nama; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'lab'=>$lab)); ?>