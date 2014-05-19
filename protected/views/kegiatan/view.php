<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */

$this->breadcrumbs=array(
	'Kegiatan'=>array('index'),
	$model->id,
);
?>

<h3>Kegiatan <?php echo $model->nama; ?></h3>

<div>
<table class="tab-lab">
	<tr>
		<td width="150px">Nama Kegiatan</td>
		<td>:</td>
		<td><?php echo $model->nama; ?></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td>
			<?php 
				$this->widget('ext.expander.Expander',array(
            	'content'=>$model->deskripsi,
        	));?>
    	</td>
	</tr>
	<tr>
		<td width="150px">Waktu Kegiatan</td>
		<td>:</td>
		<td><?php echo $model->waktu_kegiatan; ?></td>
	</tr>
</table>
</div>


</div>
</div>

<div class="span2">
    <div id="rightmenu">
        <ul>
               <li><a href="">Delete Kegiatan</a></li>
        </ul>
    </div><!-- sidebar -->
</div>
