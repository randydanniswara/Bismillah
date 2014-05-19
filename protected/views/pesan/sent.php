<?php
/* @var $this PesanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pesan',
);?>

<h3>Outbox</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
	//echo PesanUser::model()->getPesan(Yii::app()->user->id);
?>

</div>
</div>
<div class="span2">
	<div id="rightmenu">
		<ul>
			<li><a href="/Bismillah/pesan/create">Create Pesan</a></li>
			<li><a href="/Bismillah/pesan/index">Inbox</a></li>
			
		</ul>
	</div><!-- sidebar -->
</div>