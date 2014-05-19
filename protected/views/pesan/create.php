<?php
/* @var $this PesanController */
/* @var $model Pesan */

$this->breadcrumbs=array(
	'Pesans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pesan', 'url'=>array('index')),
	array('label'=>'Manage Pesan', 'url'=>array('admin')),
);
?>

<h1>Create Pesan</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'list'=>$list)); ?>

<?php
	// foreach ($list as $key) {
	// 	echo "$key<br>";
	// }
?>