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
