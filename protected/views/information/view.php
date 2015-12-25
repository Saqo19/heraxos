<?php
/* @var $this InformationController */
/* @var $model Information */


?>

<div class="inftitle"><?php echo $model->title; ?></div>

<div class="myview"><span class="helper2"></span>
	<?php 
		if($model->image){ 
			echo CHtml::image(Yii::app()->baseUrl."/banner/".$model->image,$model->image , array(
		    'class' => 'pic',
		));
		}else{
			echo CHtml::image(Yii::app()->baseUrl."/banner/000.jpg", $model->image , array(
		    'class' => 'pic',
		));
		}
	?>
</div>

<div class="inf">
	<div class="infm">Անուն: <?php echo $model->full_name; ?></div>
	<div class="infm">Հեռախոսի Համար: <?php echo $model->number; ?></div>
	<div class="infm">Տարածաշրջան: <?php echo $model->location; ?></div>
	<div class="infm">Հեռախոսի Մոդել: <?php echo $model->phone; ?></div>
        <div class="infm">Գին: <?php echo $model->price; ?> AMD</div>
    <div class="infm">Էլեկտրոնային Հասցե: <?php echo $model->email; ?></div>
</div>
	<div class="descr"><?php echo $model->description; ?></div>

