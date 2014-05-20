<?php
/* @var $this AsetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Lab'=>array('/lab/index'),
    'Aset',
);?>
    
<h3>Aset</h3>

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

?>
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

        <?php 
        $model = Aset::model();
        $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'tabel',
            'dataProvider'=>$dataProvider,
            'columns'=>array(
                array('name'=>'Nama Aset',  'value'=>'$data->nama'),   
                array('name'=>'Jumlah Aset',  'value'=>'$data->jumlah'), 
                array('name'=>'Tahun',  'value'=>'$data->tahun'),
             ),
        )); ?>


    </div>
    </div>

    <div class="span2">
        <div id="rightmenu">
            <ul>
                    <li><a href="/Bismillah/aset/create">Create Aset</a></li>
                    <?php if(Yii::app()->user->getRole()==2){ ?>
                       <li><a href="/Bismillah/aset/admin">Manage Aset</a></li>
                    <?php } ?>
            </ul>
        </div><!-- sidebar -->
    </div>

<?php


    echo "<style>.summary{display:none;}</style>";
if(isset($this->id)){
    $tmp = Aset::model()->getAllDataTahun($this->id);
    $this->Widget('ext.highcharts.HighchartsWidget', array(
       'options'=>array(
          'chart' => array('type'=> 'column'),
          'title' => array('text' => 'Jumlah Aset Per Tahun'),
          'htmlOptions' => array(
            'width'=>200,
            'height'=>300
          ),
          'xAxis' => array(
             'title' => array('text'=>'Tahun'),
             'categories' => array_keys($tmp)
          ),
          'yAxis' => array(
             'title' => array('text' => 'Aset')
          ),
          'series' => array(
             array('data' => array_values($tmp),'name'=>"Jumlah Aset"),
             // array('data' => array(6),'name' => 'Lab 02')    
          )
       )
    ));

}
?>
