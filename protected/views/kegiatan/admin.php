<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */

$this->breadcrumbs=array(
	'Kegiatan'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kegiatan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Kegiatan</h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'deskripsi',
		'waktu',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
</div>

<div class="span2">
	<div id="rightmenu">
		<ul>
				<li><a href="/Bismillah/kegiatan/create">Create Kegiatan</a></li>
		</ul>
	</div><!-- sidebar -->

</div>

