<?php
/* @var $this PesanController */
/* @var $model Pesan */

$this->breadcrumbs=array(
	'Pesans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pesan', 'url'=>array('index')),
	array('label'=>'Create Pesan', 'url'=>array('create')),
	array('label'=>'View Pesan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pesan', 'url'=>array('admin')),
);
?>

<h1>Update Pesan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>