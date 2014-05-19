<?php
/* @var $this KegiatanController */
/* @var $data Kegiatan */
?>



<div>
<table class="tab-lab">
	<tr>
		<td width="150px">Nama Kegiatan</td>
		<td>:</td>
		<td width="545px"><?php echo $data->nama; ?></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td>
			<?php 
				$this->widget('ext.expander.Expander',array(
            	'content'=>$data->deskripsi,
        	));?>
        </td>
	</tr>
	<tr>
		<td>Waktu</td>
		<td>:</td>
		<td><?php echo $data->waktu_kegiatan; ?></td>
	</tr>
</table>
</div>