<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	'Create',
);?>

<h3>Create Dokumen</h3>

<?php $this->renderPartial('_form', array('model'=>$model,'lab'=>$lab)); ?>

</div>
</div>

<div class="span2">
	<div id="rightmenu">
        	<ul>
                <li><a href="/Bismillah/dokumen/admin">Manage Dokumen</a></li>
        	</ul>
	</div><!-- sidebar -->
</div>