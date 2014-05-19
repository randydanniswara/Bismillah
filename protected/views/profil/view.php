<?php
/* @var $this ProfilController */
/* @var $model Profil */

$this->breadcrumbs=array(
	'Profil'=>array('index'),
	$model->id,
);

/*$this->menu=array(
	array('label'=>'List Profil', 'url'=>array('index')),
	array('label'=>'Create Profil', 'url'=>array('create')),
	array('label'=>'Update Profil', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Profil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profil', 'url'=>array('admin')),
);*/
?>

<h3>Profil <?php echo $model->nama_depan." ".($model->nama_belakang); ?></h3>



<div>
<table class="tab-lab">
	<!-- hapus -->
	<tr>
		<td width="150px">Id Profil</td>
		<td>:</td>
		<td width="545px"><?php echo $model->id; ?></td>
	</tr>
	<!-- batas hapus -->
	<tr>
		<td width="200px">Nama Depan</td>
		<td>:</td>
		<td><?php echo $model->nama_depan ?></td>
	</tr><tr>
		<td>Nama Belakang</td>
		<td>:</td>
		<td><?php echo $model->nama_belakang; ?></td>
	</tr><tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $model->ttl; ?></td>
	</tr><tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $model->alamat; ?></td>
	</tr><tr>
		<td>No. Telepon</td>
		<td>:</td>
		<td><?php echo $model->telp; ?></td>
	</tr><tr>
		<td>Avatar</td>
		<td>:</td>
		<td><?php echo $model->avatar; ?></td>
	</tr>
</table>
</div>
