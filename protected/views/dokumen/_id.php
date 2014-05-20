<?php
/* @var $this DokumenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Lab'=>array('/lab/index'),
	'Dokumen',
);?>

<h3>Dokumen</h3>
<div class="list-lab">
<?php 
    $labs = LabUser::model()->findAll("id_lab=".$id);
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

<?php if($ada){ ?>
</div>
</div>

<div class="span2">
    <div id="rightmenu">
        <ul>
                <li><a href="/Bismillah/dokumen/create">Create Dokumen</a></li>
                <li><a href="/Bismillah/dokumen/admin">Manage Dokumen</a></li>
            
        </ul>
    </div><!-- sidebar -->

</div>
<?php
}
?>
<?php
    if(isset($this->id)){
    $tmp = Dokumen::model()->getAllDataTahun($id);
    //echo "ada gak? : ".var_dump($tmp);return;
    $this->Widget('ext.highcharts.HighchartsWidget', array(
       'options'=>array(
          'chart' => array('type'=> 'column'),
          'title' => array('text' => 'Jumlah Dokumen Per Tahun'),
          'htmlOptions' => array(
            'width'=>200,
            'height'=>300
          ),
          'xAxis' => array(
             'title' => array('text'=>'Tahun'),
             'categories' => array_keys($tmp)
          ),
          'yAxis' => array(
             'title' => array('text' => 'Jumlah Dokumen')
          ),
          'series' => array(
             array('data' => array_values($tmp),'name'=>"Jumlah Dokumen"),
             // array('data' => array(6),'name' => 'Lab 02')    
          )
       )
    ));
}
?>