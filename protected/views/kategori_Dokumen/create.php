<?php
/* @var $this kategori_DokumenController */
/* @var $model kategori_Dokumen */

$this->breadcrumbs=array(
	'kategori_Dokumens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List kategori Dokumen', 'url'=>array('index')),
	array('label'=>'Manage kategori Dokumen', 'url'=>array('admin')),
);
?>

<h1>Create kategori Dokumen</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>