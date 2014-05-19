<?php
/* @var $this PublikasiController */
/* @var $model Publikasi */

$this->breadcrumbs=array(
	'Publikasi'=>array('index'),
	$model->id,
);?>

<h3>Publikasi <?php echo $model->judul; ?></h3>

<div>
<table class="tab-lab">
	<tr>
		<td width="150px">Judul Publikasi</td>
		<td>:</td>
		<td><?php echo $model->judul; ?></td>
	</tr>
	<tr>
		<td width="150px">Pengarang</td>
		<td>:</td>
		<td><?php echo $model->pengarang; ?></td>
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
               <li><a href="">Delete Publikasi</a></li>
        </ul>
    </div><!-- sidebar -->
</div>