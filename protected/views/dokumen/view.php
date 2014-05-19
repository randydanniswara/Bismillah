<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	$model->id,
);?>

<h3>Dokumen <?php echo $model->nama;?></h3>

<div>
<table class="tab-lab">
	<tr>
		<td width="150px">Nama Dokumen</td>
		<td>:</td>
		<td><?php echo $model->nama; ?></td>
	</tr>
	<tr>
		<td width="150px">Waktu</td>
		<td>:</td>
		<td><?php echo $model->waktu; ?></td>
	</tr>
	<tr>
		<td width="150px">Nama File</td>
		<td>:</td>
		<td><?php echo $model->isi; ?></td>
	</tr>
</table>
</div>


</div>
</div>

<div class="span2">
    <div id="rightmenu">
        <ul>
               <li><a href="">Delete Dokumen</a></li>
        </ul>
    </div><!-- sidebar -->
</div>