<?php
/* @var $this KegiatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lab'=>array('/lab/index'),
	'Kegiatan',
);

$labs = LabUser::model()->findAll("id_lab=".$id);
    $tmp = array();
    foreach ($labs as $key) {
        $tmp[] = $key->id_user;
    }
    $ada = FALSE;
    if (in_array(intval(Yii::app()->user->id), $tmp)) {
        $ada = TRUE;
    }
?>

<h3>Kegiatan</h3>

<div class="list-lab">
		<?php 
    
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
	
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php if($ada){ ?>
</div>
</div>

<div class="span2">
	<div id="rightmenu">
		<ul>
				<li><a href="/Bismillah/kegiatan/create">Create Kegiatan</a></li>
				<li><a href="/Bismillah/kegiatan/admin">Manage Kegiatan</a></li>
			
		</ul>
	</div><!-- sidebar -->

</div>
<?php
}
?>

