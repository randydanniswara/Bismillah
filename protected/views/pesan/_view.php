<?php
/* @var $this PesanController */
/* @var $data Pesan */
?>

<div  class="tab-lab">
<table>
	<tr>
		<td width="150px">Judul Pesan</td>
		<td>:</td>
		<td width="545px"><?php echo $data->judul; ?></td>
	</tr>
	<tr>
		<td width="150px">Pengirim</td>
		<td>:</td>
		<td width="545px"><?php echo $data->id_sent; ?></td>
	</tr>
	<tr>
		<td width="150px">Waktu</td>
		<td>:</td>
		<td width="545px"><?php echo $data->waktu; ?></td>
	</tr>
</table>

<div class="button"><a href="<?php echo Yii::app()->createUrl('/pesan/view/'.$data->id) ?>">Detail</a></div>
</div>