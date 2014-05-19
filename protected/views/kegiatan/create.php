<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */

$this->breadcrumbs=array(
	'Kegiatan'=>array('index'),
	'Create',
);?>

<h3>Create Kegiatan</h3>

<?php $this->renderPartial('_form', array('model'=>$model,'lab'=>LabUser::model())); ?>