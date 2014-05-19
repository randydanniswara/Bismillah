<?php
/* @var $this AsetController */
/* @var $model Aset */
 
$this->breadcrumbs=array(
	'Lab'=>array('/lab/index'),
        'Aset'=>array('/aset/id','id'=>$model->id),
        'Manage',
);?>
 
<h3>Manage Aset</h3>

<div class="search-form" style="display:none">
 
<?php $this->renderPartial('_search',array(
        'model'=>$model,
)); ?>
</div><!-- search-form -->
 
<?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'grid-aset',
        'dataProvider'=>$data,
        'filter'=>$model,
        'columns'=>array(
                'id',
                'nama',
                'jumlah',
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
			<li><a href="/Bismillah/aset/create">Create Aset</a></li>
		</ul>
	</div><!-- sidebar -->

</div>