<?php
/* @var $this LogBookController */
/* @var $model LogBook */

$this->breadcrumbs=array(
	'Log Book'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#log-book-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Log Book</h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grid-logbook',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'judul',
		'isi',
		'id_lab',
		'id_anggota',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{delete}',
		),
	),
)); ?>
