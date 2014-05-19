<?php
/* @var $this LogBookController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Log Book',
);?>

<h3>Log Book (Nama)</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>
</div>

<div class="span2">
	<div id="rightmenu">
		<ul>
			<?php if(Yii::app()->user->getRole()==3) { ?>
				<li><a href="/Bismillah/logbook/create">Create Logbook</a></li>
			<?php } else { ?>
				<li><a href="/Bismillah/logbook/admin">Manage Logbook</a></li>
			<?php } ?>		
		</ul>
	</div><!-- sidebar -->

</div>