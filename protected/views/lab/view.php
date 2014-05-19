<?php
/* @var $this LabController */
/* @var $model Lab */

$this->breadcrumbs=array(
	'Lab'=>array('index'),
	$model->id,
); ?>

<h3><?php echo $model->nama; ?></h3>
	
<div class="list-lab">
	<?php

    $labs = LabUser::model()->findAll("id_lab=".$model->id);
    $tmp = array();
    foreach ($labs as $key) {
        $tmp[] = $key->id_user;
    }
    $ada = FALSE;
    if (in_array(intval(Yii::app()->user->id), $tmp)) {
        $ada = TRUE;
    }
    $this->widget('zii.widgets.CMenu',array(
    	'activeCssClass'=>'active',
        'activateParents'=>true,
        'encodeLabel'=>false,
        'items'=>array(
            array('label'=>'Aset', 'url'=>array('/aset/id','id'=>$model->id), 'visible'=>$ada, 'id'=>$model->id),
            array('label'=>'Dokumen', 'url'=>array('/dokumen/id','id'=>$model->id), 'visible'=>$ada, 'id'=>$model->id),
            array('label'=>'Kegiatan', 'url'=>array('/kegiatan/id','id'=>$model->id), 'id'=>$model->id),
            array('label'=>'Publikasi', 'url'=>array('/publikasi/id','id'=>$model->id), 'id'=>$model->id), 
        ),
    )); ?>
</div>


	<div>
<table class="tab-lab">
	<tr>
		<td width="150px">Nama Lab</td>
		<td>:</td>
		<td><?php echo $model->nama; ?></td>
	</tr>
	<tr>
		<td>Profil Lab</td>
		<td>:</td>
		<td>
			<?php 
				$this->widget('ext.expander.Expander',array(
            	'content'=>$model->profil,
        	));?>
    	</td>
	</tr>
	<tr>
		<td>Ketua Lab</td>
		<td>:</td>
		<td>
			<?php 
				$p = Profil::model()->findByPk($model->id_ketua);
				if ($p) {
					echo CHtml::encode(Profil::model()->findByPk($model->id_ketua)->nama_depan); 
				} else {
					echo CHtml::encode("Ketua Lab Belum ditentukan"); 
				}
			?>
		</td>
	</tr>
	<tr>
		<td>Daftar Anggota Lab</td>
		<td>:</td>
		<td>
			<?php 
		
			if (array_key_exists($model->id, $this->listAnggota)) {
				$list = $this->listAnggota[$model->id];
				foreach ($list as $anggota) {
					echo "<li>$anggota</li>";	
				}
			}
		
			?>
		</td>
	</tr>
</table>
</div>

