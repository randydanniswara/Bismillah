<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Create Account',
);


?>

<h3>Create Account</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'lab'=>LabUser::model())); ?>