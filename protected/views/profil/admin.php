<?php
/* @var $this ProfilController */
/* @var $model Profil */

$this->breadcrumbs=array(
	'Profil'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List Profil', 'url'=>array('index')),
	array('label'=>'Create Profil', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#profil-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h3>Manage Profile</h3>

<div class="search-form" style="display:none">
<?php 
/*$this->renderPartial('_search',array(
	'model'=>$model,
));*/ ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grid-prof',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama_depan',
		'nama_belakang',
		'ttl',
		'alamat',
		'telp',
		'avatar',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{delete}',
		),
	),
)); ?>
