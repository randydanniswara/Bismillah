<?php /* @var $this Controller */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />

		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" />
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/slider.js"></script>
</script>
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>

		<div class="headhead">

		</div><!-- header -->
		<?php if(!Yii::app()->user->isGuest) { ?>
	
			<div class="profil">
				<p>
					<?php 
						$nama=Profil::model()->findByPk(Yii::app()->user->id);
						$namadpn=$nama->nama_depan;
						$namadpn=$namadpn." ".($nama->nama_belakang);
					?>
					<?php echo 'Hello, '.$namadpn;
					if (Yii::app()->user->getRole()==1){ ?>
						<br>You are logged in as Admin
						
					<?php } elseif (Yii::app()->user->getRole()==2){ ?>
						<br>You are logged in as Ketua Lab 
					<?php }
					elseif (Yii::app()->user->getRole()==3){ ?>
						<br>You are logged in as Anggota Lab
					<?php }
					
					?>
				</p>
				<p><?php 
				$URL_AVATAR = Yii::app()->request->baseUrl.'/assets/avatar/';
					$poto=$nama->avatar;
					echo "<img src='".$URL_AVATAR.$poto."'>";
				?>
			</p>
				<p>
					<?php echo CHtml::link('Edit Profil',array('profil/update','id'=>Yii::app()->user->id),array('class'=>'search-button'));
					?>
				</p>
				
			</div>

			<?php } ?>

		<div class="container">
			<div id='cssmenu'>
				<?php $this->widget('zii.widgets.CMenu',array(
					'activeCssClass'=>'active',
		  			'activateParents'=>true,
		            'encodeLabel'=>false,
					'items'=>array(
						array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Pesan', 'url'=>array('/pesan/index'), 'visible'=>Yii::app()->user->getRole()==1||Yii::app()->user->getRole()==2),
						array('label'=>'LogBook', 'url'=>array('/logbook/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Lab', 'url'=>array('/lab/index'), 'visible'=>Yii::app()->user->isGuest || Yii::app()->user->getRole()==2 || Yii::app()->user->getRole()==3),
						array('label'=>'Lab','url'=>array('/lab/index'), 'visible'=>Yii::app()->user->getRole()==1,
						'itemOptions'=>array('class'=>'has-sub'),
							'items'=>array(
								array('label'=>'Create Lab', 'url'=>array('/lab/create')),
								array('label'=>'Manage Lab', 'url'=>array('/lab/admin')),
							), 
						),
						array('label'=>'Account','url'=>array(''), 'visible'=>Yii::app()->user->getRole()==1,
						'itemOptions'=>array('class'=>'has-sub'),
							'items'=>array(
								array('label'=>'Create Account', 'url'=>array('/user/create')),
								array('label'=>'Manage Account', 'url'=>array('/user/admin')),
							), 
						),				
						array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/home.png" id="home"/>', 'url'=>array('/site/index')),				
					 ),
				)); ?>
			
			</div>

			<div id="mainmenu">
				
				

			</div><!-- mainmenu -->
			<div class="konten">
				<?php if(isset($this->breadcrumbs)):?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
						'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
				<?php endif?>

				<?php echo $content; ?>

				<div class="clear"></div>

			</div><!-- page -->
		</div>
        
		<div id="footer-up">
			<div id="footer-in">
				<div id="fasilkom">
					<table>
						<tr>
							<td width="70px">
								<img src="/Bismillah/images/fasilkom.png"/>
							</td>
							<td>
			        			<a href="http://www.cs.ui.ac.id/id" title="Fakultas Ilmu Komputer - Universitas Indonesia"><h4><b>Fakultas Ilmu Komputer</b></a>
			        			</br>Universitas Indonesia</h4> 
			       			</td>
			        	</tr>
			        	<tr>
			        		<td></td>
			        		<td>
				            	Kampus UI Depok, Indonesia 16424
				            	<ul>
				            		<li>Telp: +62 21 786 3419
				            		<li>Fax: +62 21 786 3415
				            		<li>Email: humasfasilkom@cs.ui.ac.id
									<li>Twitter: <a href="https://twitter.com/FASILKOM_UI"> @FASILKOM_UI</a>
				        		</ul>
				        	</td>
			        	</tr>
			        </table>
		    	</div>
	        </div>
		</div>
		<div id="footer-down">
			Copyright &copy; <?php echo date('Y'); ?> by Propensi B05<br/>
		</div><!-- footer -->

	</body>

</html>
