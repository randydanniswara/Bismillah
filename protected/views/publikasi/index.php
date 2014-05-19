<?php
/* @var $this PublikasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lab'=>array('/lab/index'),
	'Publikasi',
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


<h3>Publikasi</h3>
    
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

<br>

<?php

if (TRUE) {
	echo "<style>.summary{display:none;}</style>";
	$tmp = Publikasi::model()->getAllData();
	$this->Widget('ext.highcharts.HighchartsWidget', array(
	   'options'=>array(
	   	  'chart' => array('type'=> 'column'),
	      'title' => array('text' => 'Jumlah Publikasi Per Lab'),
	      'htmlOptions' => array(
	      	'width'=>200,
	      	'height'=>300
	      ),
	      'xAxis' => array(
	         'title' => array('text'=>'Nama Lab'),
	         'categories' => array_keys($tmp)
	      ),
	      'yAxis' => array(
	         'title' => array('text' => 'Jumlah Publikasi')
	      ),
	      'series' => array(
	         array('data' => array_values($tmp),'name'=>"Jumlah Publikasi"),
	         // array('data' => array(6),'name' => 'Lab 02')    
	      )
	   )
	));
}

if($ada){ ?>
</div>
</div>

<div class="span2">
	<div id="rightmenu">
		<ul>
				<li><a href="/Bismillah/publikasi/create">Create Publikasi</a></li>
				<li><a href="/Bismillah/publikasi/admin">Manage Publikasi</a></li>
			
		</ul>
	</div><!-- sidebar -->

</div>
<?php
}
