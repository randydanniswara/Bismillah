<?php
/* @var $this ProfilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profil',
);

?>


<h3>Profil Anda</h3>

<div class="prof">
<?php 
$c = 1;
$URL_AVATAR = Yii::app()->request->baseUrl.'/assets/avatar/';
	foreach ($model as $key => $value) {
		// if ($c == 1) echo $value."<br>";
		?><table><?php
		if ($c == 2) echo "<tr><td width='100px'>Nama Depan<td width='10px'>:</td><td width='500px'>".$value."</td>";
		if ($c == 3) echo "<tr><td width='100px'>Nama Belakang<td width='10px'>:</td><td width='500px'>".$value."</td>";
		if ($c == 4) echo "<tr><td width='100px'>Tanggal Lahir <td width='10px'>:</td><td width='500px'>".$value."</td>";
		if ($c == 5) echo "<tr><td width='100px'>Alamat</td><td width='10px'>:</td><td width='500px'>".$value."</td>";
		if ($c == 6) echo "<tr><td width='100px'>Telp</td><td width='10px'>:</td><td width='500px'>".$value."</td>";
		if ($c == 7) echo  "<tr><td width='100px'>Foto</td><td width='10px'>:</td><td width='500px'><img src='".$URL_AVATAR.$value."'>";
		$c++;?></table><?php
	}

echo "<br>";
echo "Tergabung di lab :<br>";
//$anggota = array();
//echo var_dump($lab[0]);
if ($lab != NULL) { 
	$c = 1;
	foreach ($lab as $p) {
		foreach ($p as $key => $value) {
			if ($key == "nama"){
				echo $c++.". $value<br>";
			}
		}
	}
}
echo "<br>";
?><div class="button"><?php
echo CHtml::link('Edit',array('profil/update','id'=>Yii::app()->user->id)); 
?>
</div>
</div>
