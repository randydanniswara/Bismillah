<?php
/* @var $this LabController */
/* @var $data Lab */
?>

<div class="lab">

	<table>
		<tr>
			<td width="150px"><b><?php echo CHtml::encode($data->getAttributeLabel('Nama Lab')); ?>
			<td width="10px">:</b>
			<td width="450px"><?php echo CHtml::encode($data->nama); ?>
		</tr>
		<tr>
			<td><b><?php echo CHtml::encode($data->getAttributeLabel('Profil Lab')); ?>
			<td>:</b>
			<td>
				<?php 
					$this->widget('ext.expander.Expander',array(
	            	'content'=>$data->profil,
       			 ));?>
    		</td>
		</tr>
		<tr>
			<td><b><?php echo CHtml::encode($data->getAttributeLabel('Ketua Lab')); ?>
			<td>:</b>
			<td><?php 
					$p = Profil::model()->findByPk($data->id_ketua);
					if ($p) {
						echo CHtml::encode(Profil::model()->findByPk($data->id_ketua)->nama_depan); 
					} else {
						echo CHtml::encode("Ketua Lab Belum ditentukan"); 
					}
				?>
				
		</tr>
			
		
	</table>
	<!--<div class="anggota">
		<ul>
			<?php $list = $this->listAnggota;
				foreach ($list as $k => $v) {
					if ($k == $data->id){
						foreach ($v as $nama) {
							echo "<li>$nama</li>";
						}
					}
				}
			?>
		</ul>
	</div>
-->

	<div class="button">
		<?php echo CHtml::link('VISIT', array('view', 'id'=>$data->id)); ?>
	</div>

</div>