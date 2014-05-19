<?php
/* @var $this kategori_DokumenController */
/* @var $model kategori_Dokumen */

$this->breadcrumbs=array(
	'kategori_Dokumens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List kategori_Dokumen', 'url'=>array('index')),
	array('label'=>'Create kategori_Dokumen', 'url'=>array('create')),
	array('label'=>'View kategori_Dokumen', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage kategori_Dokumen', 'url'=>array('admin')),
);
?>

<h1>Update kategori_Dokumen <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>