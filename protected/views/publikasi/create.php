<?php
/* @var $this PublikasiController */
/* @var $model Publikasi */

$this->breadcrumbs=array(
	'Publikasi'=>array('index'),
	'Create',
);
?>

<h3>Create Publikasi</h3>

<?php $this->renderPartial('_form', array('model'=>$model,'lab'=>$lab)); ?>

</div>
</div>

<div class="span2">
	<div id="rightmenu">
        	<ul>
                <li><a href="/Bismillah/publikasi/admin">Manage Publikasi</a></li>
        	</ul>
	</div><!-- sidebar -->
</div>