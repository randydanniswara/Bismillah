<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Manage Account',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Account</h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id', 
		'username',
		'email',
		'role',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
