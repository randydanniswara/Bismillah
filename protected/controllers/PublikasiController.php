<?php

class PublikasiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public $pub = array();
	public $id = NULL;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','id'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','id'),
				'expression'=>'$user->getRole()>=2',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionId($id){
		$dataProvider=new CActiveDataProvider('Publikasi', array(
				'criteria' => array(
					'condition'=>'id_lab='.$id,
				)
		));
		// echo var_dump(Publikasi::model()->find("id_lab=".$id));return;
		$this->id = $id;
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'id'=>$this->id,
		));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Publikasi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$id_user = Yii::app()->user->id;	
		$lab = LabUser::model()->find("id_user=:x",array("x"=>$id_user));
		$lab = Lab::model()->find("id=:p",array("p"=>$lab->id_lab));
		$URL = Yii::app()->basePath .'/../assets/publikasi/'.$lab->id."/";
		// echo $URL ;return;
		if(isset($_POST['Publikasi']))
		{
			$model->attributes=$_POST['Publikasi'];
			//echo var_dump($model);return;
			$model->id_lab = $lab->id;
			$model->judul = CUploadedFile::getInstance($model,'judul');
			$model->validate();
			//echo var_dump($model->judul);return;
			if (!is_dir($URL)) {
				mkdir($URL);
			}
			//echo $URL.$model->judul.".".$model->judul->getExtensionName();return;
			$model->judul->saveAs($URL.$model->judul);
			$model->judul = $model->judul->getName();
			//echo var_dump($model);return;
			if($model->save()) {
				$pub_user = new PublikasiUser;
				$pub_user->id_publikasi = intval($model->id);
				$pub_user->id_user = Yii::app()->user->id;
				$pub_user->save();
				Yii::app()->user->setFlash('create','Publikasi berhasil diunggah');
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'lab'=>$lab,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$lab = Lab::model()->find("id=:p",array("p"=>$model->id_lab));
		$URL = Yii::app()->basePath .'/../assets/publikasi/'.$lab->id."/";
		$delete = $URL.$model->judul;
		$pub_user = PublikasiUser::model()->findByAttributes(array('id_user'=>Yii::app()->user->id,'id_publikasi'=>$id));
		if ($pub_user == NULL)
			throw new CHttpException('403','You cannot update this publication');
		//echo $delete;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Publikasi']))
		{
			$model->attributes=$_POST['Publikasi'];
			$model->judul = CUploadedFile::getInstance($model,'judul');
			$model->validate();
			$model->judul->saveAs($URL.$model->judul);
			$model->judul = $model->judul->getName();
			$pub_user->id_publikasi = $model->id;
			$pub_user->id_user = Yii::app()->user->id;
			$pub_user->save();
			unlink($delete);
			//echo var_dump($model);return;
			if($model->save()) {
				Yii::app()->user->setFlash('update','Publikasi berhasil diupdate');
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'lab'=>$lab,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = $this->loadModel($id);
		$URL = Yii::app()->basePath .'/../assets/publikasi/'.$model->id_lab."/";
		$link  = $URL.$model->judul;
		$relasi = PublikasiUser::model()->find("id_publikasi=".$id);
	 	unlink($link);
	 	$model->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Publikasi');
		$list = null;
		if (!Yii::app()->user->isGuest)	
			$list = PublikasiUser::model()->findAll("id_user=".Yii::app()->user->id);
		//echo var_dump($list);return;
		if (!$list) {
			$list = PublikasiUser::model()->findAll();
		}
		if (empty($list)) {
			$this->redirect(array('create'));
		}
		$tmp = array();
		foreach ($list as $k) {
			$this->pub[] = $k->id_publikasi;
		}
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Publikasi('search');
		//$model= Publikasi::model()->privateSearch("id_lab=".$k);
		//echo var_dump($model);return;	
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Publikasi'])){
			$model->attributes=$_GET['Publikasi'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Publikasi the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Publikasi::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Publikasi $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='publikasi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
