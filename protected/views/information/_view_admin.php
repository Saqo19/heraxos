<?php
/* @var $this InformationController */
/* @var $data Information */

?>

<div class="view">
<?php echo CHtml::link('Փոփոխել', array('information/adminupdate', 'id'=>$data->id),array('class'=>'btn1 btn-success position')); ?>
<?php echo CHtml::link('Ջնջել', array('information/delete', 'id'=>$data->id),
array(
    'submit'=>array('information/delete', 'id'=>$data->id),
    'class' => 'btn2 btn-success delete','confirm'=>'This will delete the post. Are you sure?'
  )
); ?>
	<div class = "my"><span class="helper2"></span>
		<?php 
		if($data->image){ 
			echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/banner/".$data->image,$data->image, array(
		    'class' => 'someClass',
		)), array('view', 'id'=>$data->id));
		}else{
			echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/banner/000.jpg", $data->image , array(
		    'class' => 'someClass',
		)), array('view', 'id'=>$data->id));
		}
		
		?>

	</div>
	<!-- <a href="<?php echo Yii::app()->createUrl('information/view', array('id' => $data->id))?>"> -->
	<div class="mydiv">
		

		<div class="mytitle">
		<?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id), array('class'=>'btn_my')); ?>
		</div>



		<div class="myprice">
		<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
		<b><?php echo CHtml::encode($data->price); ?> AMD</b>
		</div>		
		<div class="mydate">
	        <b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
		<b><?php echo CHtml::encode($data->time); ?></b>
		</div>
       	
	</div>
	<!-- </a> -->
</div>