<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */

$this->breadcrumbs=array(
	'Kegiatan'=>array('index'),
	'Create',
);?>

<h3>Create Kegiatan</h3>

<?php $this->renderPartial('_form', array('model'=>$model,'lab'=>LabUser::model())); ?>

</div>
</div>

<div class="span2">
	<div id="rightmenu">
        	<ul>
                <li><a href="/Bismillah/kegiatan/admin">Manage Kegiatan</a></li>
        	</ul>
	</div><!-- sidebar -->
</div>