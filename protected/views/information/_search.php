<?php
/* @var $this InformationController */
/* @var $model Information */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
       
	<div class="form-group row">
		<?php echo $form->label($model,'title', array('class' => 'control-label')); ?>
            <div class="leb">
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256, 'class' => 'form-control')); ?>
            </div>
	</div>

<!--	<div class="row">
		<?php // echo $form->label($model,'phone'); ?>
		<?php // echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>256)); ?>
	</div>-->
    <div class="form-group row">
        <?php echo $form->label($model,'phone', array('class' => 'control-label')); ?>
        <div class="leb">
    <?php
        $records = Phone::model()->findAll(array('order' => 'phone'));
        echo $form->dropDownList($model,'phone', CHtml::listData($records, 'phone','phone'), array('empty'=>'Select Model', 'class' => 'form-control-drop'));
    ?>
        </div>
    </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Որոնել', array('class' => 'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->