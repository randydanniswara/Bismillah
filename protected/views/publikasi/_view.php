<?php
/* @var $this PublikasiController */
/* @var $data Publikasi */
?>

<div class="tab-lab">
<table>
	<tr>
		<td width="150px">Judul Publikasi</td>
		<td>:</td>
		<td width="545px"><?php echo $data->judul; ?></td>
	</tr>
	<tr>
		<td width="150px">Tahun</td>
		<td>:</td>
		<td width="545px"><?php echo $data->tahun; ?></td>
	</tr>
	<tr>
		<td width="150px">Pengarang</td>
		<td>:</td>
		<td width="545px"><?php echo $data->pengarang; ?></td>
	</tr>
</table>
	
	<div class="button">
	<a href="/propensi/assets/publikasi/<?php echo $data->id_lab."/".$data->judul;?>">Download</a>
</div><div class="button1">
	<?php if(!Yii::app()->user->getRole()==1){
		echo CHtml::link('Update',array('publikasi/update','id'=>$data->id),array('class'=>'button'));
		echo CHtml::link('Delete File',array('publikasi/delete','id'=>$data->id),
				array(
					'class'=>'button',
					'submit'=>array('publikasi/delete','id'=>$data->id),
					'confirm' => 'This will remove file. Are you sure?'
				)
			);
		}?>
	</div>
</div>