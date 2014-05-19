<?php
/* @var $this PesanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pesan',
);
?>

<h3>Inbox </h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>
</div>
<?php
if (Yii::app()->user->role == 2) {
?>

<div class="span2">
	<div id="rightmenu">
		<ul>
			<li><a href="/Bismillah/pesan/create">Create Pesan</a></li>		
			<li><a href="<?php echo Yii::app()->createUrl('/pesan/sent');?>">Sent Message</a></li>	
		</ul>
	</div><!-- sidebar -->

</div>
<?php
}

?>
