<?php
/* @var $this RegController */
/* @var $model Reg */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Reg', 'url'=>array('index')),
	array('label'=>'Manage Reg', 'url'=>array('admin')),
);
?>

<h1>Create Users</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>