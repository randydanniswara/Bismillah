<?php
/* @var $this PublikasiController */
/* @var $model Publikasi */

$this->breadcrumbs=array(
	'Publikasi'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#publikasi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Publikasi</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'pengarang',
		'judul',
		'tahun',
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
				<li><a href="/Bismillah/publikasi/create">Create Publikasi</a></li>
		</ul>
	</div><!-- sidebar -->

</div>
