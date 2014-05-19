<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Lab'=>array('/lab/index'),
	'Dokumen'=>array('/dokumen/id', 'id'=>$model->id_lab),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dokumen-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Dokumen</h3>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grid-logbook',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'waktu',
		'id_lab',
		'isi',
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
                <li><a href="/Bismillah/dokumen/create">Create Dokumen</a></li>
        	</ul>
	</div><!-- sidebar -->
</div>


