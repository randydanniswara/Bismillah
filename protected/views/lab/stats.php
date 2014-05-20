<?php
	echo "<h3>Statistik Lab</h3><br>";
	/*echo $data."<br>";*/

	?> </div></div> <?php

	$tmp = Publikasi::model()->getAllData();
	$this->Widget('ext.highcharts.HighchartsWidget', array(
	   'options'=>array(
	   	  'chart' => array('type'=> 'column'),
	   	  'fill'=>'trasnparent',
	      'title' => array('text' => 'Jumlah Publikasi Per Lab'),
	      'htmlOptions' => array(
	      	'width'=>200,
	      	'height'=>300
	      ),
	      'xAxis' => array(
	         'title' => array('text'=>'Nama Lab'),
	         'categories' => array_keys($tmp)
	      ),
	      'yAxis' => array(
	         'title' => array('text' => 'Jumlah Publikasi')
	      ),
	      'series' => array(
	         array('data' => array_values($tmp),'name'=>"Jumlah Publikasi"),
	         // array('data' => array(6),'name' => 'Lab 02')    
	      )
	   )
	));

?>