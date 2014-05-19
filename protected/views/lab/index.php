<?php
/* @var $this LabController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lab',
); ?>

<h3>Lab Fasilkom Universitas Indonesia</h3>

<div class="labo">
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
</div>
</div>

<div class="span2">
	<div id="rightmenu">
		<ul>
			<?php if(Yii::app()->user->getRole()==1) { ?>
				<li><a href="/Bismillah/lab/create">Create Lab</a></li>
				<li><a href="/Bismillah/lab/admin">Manage Lab</a></li>
			<?php } ?>
			<li><a href="/Bismillah/lab/stats">View Statistic</a></li>
		</ul>
	</div><!-- sidebar -->

</div>