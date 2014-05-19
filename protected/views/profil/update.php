<?php
/* @var $this ProfilController */
/* @var $model Profil */

$this->breadcrumbs=array(
	'Profil'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<h3>Update Profil</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
</div>
<div class="span2">
	<div id="rightmenu">
		<ul>
			<li><a href="/Bismillah/profil/index">Lihat Profil</a></li>
			
			<?php if(Yii::app()->user->getRole()==1) { ?>
				<li><a href="/Bismillah/profil/admin">Manage Profil</a></li>
			<?php } ?>
		</ul>
	</div><!-- sidebar -->
</div>