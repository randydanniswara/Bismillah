<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);?>

<h3><?php echo $model->username;?></h3>

<div>
<table class="tab-lab">
	<tr>
		<td width="50px">Email</td>
		<td width="10px">:</td>
		<td width="500px"><?php echo $model->email?></td>
	</tr><tr>
		<td>Id</td>
		<td>:</td>
		<td><?php echo $model->id; ?></td>
	</tr><tr>
		<td>Role</td>
		<td>:</td>
		<td><?php echo $model->role; ?></td>
</table>
</div>
