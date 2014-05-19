<?php
/* @var $this DokumenController */
/* @var $data Dokumen */
?>
<?php 

if (isset($this->id)) {  ?>
<div class="tab-lab">
<table>
	<tr>
		<td width="150px">Judul Dokumen</td>
		<td>:</td>
		<td width="545px"><?php echo $data->nama; ?></td>
	</tr>
	<tr>
		<td width="150px">Waktu</td>
		<td>:</td>
		<td width="545px"><?php echo $data->waktu; ?></td>
	</tr>
	<tr>
		<td width="150px">Dokumen</td>
		<td>:</td>
		<td width="545px"><?php echo $data->isi; ?></td>
	</tr>
</table>
	
	<div class="button">
		<a href="/propensi/assets/dokumen/<?php echo $data->id_lab."/".$data->isi;?>">Download</a>
	</div>
	<div class="button button2">
	<?php if(Yii::app()->user->getRole()==2) {
		echo CHtml::link('Update',array('dokumen/update','id'=>$data->id));
	}?>
	</div>
</div>
<?php } ?>