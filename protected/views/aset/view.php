<?php
/* @var $this AsetController */
/* @var $model Aset */

$this->breadcrumbs=array(
	'Aset'=>array('index'),
	$model->id,
);
/*
$this->menu=array(
	array('label'=>'List Aset', 'url'=>array('index')),
	array('label'=>'Create Aset', 'url'=>array('create')),
	array('label'=>'Update Aset', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Aset', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Aset', 'url'=>array('admin')),
);*/
?>

<h3>Aset <?php echo $model->nama; ?></h1>

<div>
<table class="tab-lab">
	<tr>
		<td width="50px">Nama Aset</td>
		<td width="10px">:</td>
		<td width="800px"><?php echo $model->nama; ?></td>
	</tr>
	<tr>
		<td width="150px">Jumlah</td>
		<td>:</td>
		<td><?php echo $model->jumlah; ?></td>
	</tr>
	<tr>
		<td width="150px">Tahun</td>
		<td>:</td>
		<td><?php echo $model->tahun; ?></td>
	</tr>
</table>
</div>

</div>
</div>

<div class="span2">
    <div id="rightmenu">
        <ul>
               <li><a href="">Delete Aset</a></li>
        </ul>
    </div><!-- sidebar -->
</div>
