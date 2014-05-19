<?php
/* @var $this ProfilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profils',
);

?>


<h3>Profil Anda</h3>

<div class="prof">
<?php 
$c = 1;
$URL_AVATAR = Yii::app()->request->baseUrl.'/assets/avatar/';
	foreach ($model as $key => $value) {
		// if ($c == 1) echo $value."<br>";
		if ($c == 2) echo "<h4>".$value." ";
		if ($c == 3) echo $value."</h4>";
		if ($c == 4) echo "Tempat tanggal lahir : ".$value."<br>";
		if ($c == 5) echo "Alamat :".$value."<br>";
		if ($c == 6) echo "Telp : ".$value."<br>";
		if ($c == 7) echo  "<img src='".$URL_AVATAR.$value."'>";
		$c++;
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
echo CHtml::link('Edit',array('profil/update','id'=>Yii::app()->user->id),array('class'=>'button')); 
?>
</div>
