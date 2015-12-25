<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/jasny-bootstrap/css/jasny-bootstrap.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo">Հեռախոսներ</div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
                            array('label'=>'Հեռախոսներ', 'url'=>array('/information/all')),
                            array('label'=>'Ավելացնել', 'url'=>array('/information/create'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'Գրանցվել', 'url'=>array('/site/users'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Մուտք', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Իմ մասին', 'url'=>array('/users/index'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'Իմ հեռախոսները', 'url'=>array('/information/index'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'All Information', 'url'=>array('/users/adminall'), 'visible'=>Yii::app()->user->name=="admin"),
                            array('label'=>'All Announcement', 'url'=>array('/information/adminall'), 'visible'=>Yii::app()->user->name=="admin"),
                            array('label'=>'Ելք ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

</div><!-- page -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap-fileinput/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap-fileinput/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap-fileinput/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jasny-bootstrap/js/jasny-bootstrap.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
</body>
</html>
