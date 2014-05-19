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

<!-- </div>
</div>
<div class="span2">
	<div id="rightmenu">
		<ul>
			<li><a href="/Bismillah/publikasi/index">List Publikasi</a></li>
			<?php if(Yii::app()->user->getRole()<3) { ?>
				<li><a href="/Bismillah/publikasi/admin">Manage Publikasi</a></li>
			<?php } ?>
		</ul>
	</div>sidebar
</div> -->