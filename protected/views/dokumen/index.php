<?php
/* @var $this DokumenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Lab'=>array('/lab/index'),
	'Dokumen',
);?>

<h1>Dokumen</h1>


<div class="list-lab">
	<?php
    $id = LabUser::model()->find("id_user=".Yii::app()->user->id)->id_lab;
    $ada = TRUE;
    $this->widget('zii.widgets.CMenu',array(
    'activeCssClass'=>'active',
            'activateParents'=>true,
            'encodeLabel'=>false,
            'items'=>array(
                array('label'=>'Aset', 'url'=>array('/aset/id','id'=>$id), 'visible'=>$ada, 'id'=>$id),
                array('label'=>'Dokumen', 'url'=>array('/dokumen/id','id'=>$id), 'visible'=>$ada, 'id'=>$id),
                array('label'=>'Kegiatan', 'url'=>array('/kegiatan/id','id'=>$id), 'id'=>$id),
                array('label'=>'Publikasi', 'url'=>array('/publikasi/id','id'=>$id), 'id'=>$id), 
            ),
        )); ?>
    </div>

<div class="profil-lab">
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
			<?php if(Yii::app()->user->getRole()==2) { ?>
				<li><a href="/Bismillah/dokumen/create">Create Dokumen</a></li>
				<li><a href="/Bismillah/dokumen/admin">Manage Dokumen</a></li>
			<?php } ?>

			<li><a href="/Bismillah/dokumen/pdf">Download PDF</li>
		</ul>
	</div><!-- sidebar -->
</div>