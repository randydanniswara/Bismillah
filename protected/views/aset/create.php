<?php
/* @var $this KegiatanController */
/* @var $model aset */

$this->breadcrumbs=array(
	'Aset'=>array('index'),
	'Create',
);?>

<h3>Create Aset</h3>

<?php $this->renderPartial('_form', array('model'=>$model,'lab'=>$lab)); ?>