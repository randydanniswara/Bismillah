<?php
/* @var $this PesanController */
/* @var $model Pesan */

$this->breadcrumbs=array(
	'Pesan'=>array('index'),
	$model->id,
);

?>

<h3>View Pesan</h3>

<table class="tab-lab">
	<tr>
		<td width="150px">Judul</td>
		<td>:</td>
		<td><?php echo $model->judul; ?></td>
	</tr>
	<tr>
		<td width="150px">Isi Pesan</td>
		<td>:</td>
		<td><?php echo $model->pesan; ?></td>
	</tr>
	<tr>
		<td width="150px">Waktu</td>
		<td>:</td>
		<td><?php echo $model->waktu; ?></td>
	</tr>
	<tr>
		<td>Pengirim</td>
		<td>:<td>
		<td>
<?php
	foreach ($model as $k=>$v) {
			if ($k != "id")
				if ($k == 'id_sent') {
					echo "<b>Pengirim</b> : ".Profil::model()->getNama($v)."<br>";
				} else echo "<b>$k</b> : $v<br>";
		}	
?>
</td>
</tr>
<tr>
	<!-- <td>Penerima</td>
	<td>:<td>
		<td>
	<?php
	if (Yii::app()->user->id == $model->id_sent){
		foreach ($this->x as $k) {
			echo $k."<br>";
		}
	}
	?>
	</td> -->
</tr>
</table>
</div