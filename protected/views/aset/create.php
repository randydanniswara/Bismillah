<?php
/* @var $this KegiatanController */
/* @var $model aset */

$this->breadcrumbs=array(
	'Aset'=>array('index'),
	'Create',
);?>

<h3>Create Aset</h3>

<?php $this->renderPartial('_form', array('model'=>$model,'lab'=>$lab)); ?>

</div>
</div>

<div class="span2">
	<div id="rightmenu">
        	<ul>
                <li><a href="/Bismillah/aset/admin">Manage Aset</a></li>
        	</ul>
	</div><!-- sidebar -->
</div>