<?php
/* @var $this RegController */
/* @var $model Reg */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);


?>

<h1>View Users #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'full_name',
		'location',
		'number',
		'email',
	),
)); ?>
