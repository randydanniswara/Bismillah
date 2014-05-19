<?php
/* @var $this LabController */
/* @var $model Lab */

$this->breadcrumbs=array(
	'Lab'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>


<h3>Update <?php echo $model->nama; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model,'list'=>$list)); ?>

</div>
</div>
<div class="span2">
<?php if(Yii::app()->user->getRole()==1) { ?>
	<div id="rightmenu">
		<ul>
			<li><a href="/Bismillah/lab/index">List Lab</a></li>
			<li><a href="/Bismillah/lab/admin">Manage Lab</a></li>
			<li><a href="#">View Statistic</a></li>
		</ul>
	</div><!-- sidebar -->
<?php } ?>
</div>