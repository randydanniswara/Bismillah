<?php
/* @var $this LogBookController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Log Book',
);?>

<h3>Log Book</h3>

<div class="link">
	<?php
		$tmp = LabUser::model()->findAll("id_lab=".$id);
		foreach ($tmp as $key) {
			$nama = Profil::model()->find("id=".$key->id_user);?>
			<a href="./detail/<?php echo $key->id_user;?>"><?php echo $nama->nama_depan." ".$nama->nama_belakang; ?></a><br>
	<?php }	?>
</div>
