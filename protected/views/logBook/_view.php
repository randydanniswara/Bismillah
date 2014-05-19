<?php
/* @var $this LogBookController */
/* @var $data LogBook */
?>

<div>
<table class="tab-lab">
	<tr>
		<td width="150px">Judul Log Book</td>
		<td>:</td>
		<td width="545px"><?php echo $data->judul; ?></td>
	</tr>
	<tr>
		<td>Isi</td>
		<td>:</td>
		<td>
			<?php 
				$this->widget('ext.expander.Expander',array(
            	'content'=>$data->isi,
        	));?>
        </td>
	</tr>
</table>
</div>