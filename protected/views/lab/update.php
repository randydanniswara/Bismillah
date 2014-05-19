<?php
/* @var $this LabController */
/* @var $model Lab */

$this->breadcrumbs=array(
	'Lab'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>


<h3>Update Lab <?php echo $model->id; ?></h3>

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

<?php $this->renderPartial('_form', array('model'=>$model,'list'=>$list)); ?>