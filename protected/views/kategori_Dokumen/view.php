<?php
/* @var $this kategori_DokumenController */
/* @var $model kategori_Dokumen */

$this->breadcrumbs=array(
	'kategori_Dokumens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List kategori_Dokumen', 'url'=>array('index')),
	array('label'=>'Create kategori_Dokumen', 'url'=>array('create')),
	array('label'=>'Update kategori_Dokumen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete kategori_Dokumen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage kategori_Dokumen', 'url'=>array('admin')),
);
?>

<h1>View kategori_Dokumen #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
