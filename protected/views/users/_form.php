<?php
/* @var $this RegController */
/* @var $model Reg */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'username', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'full_name', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textField($model,'full_name',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'full_name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'location', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'number', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textField($model,'number',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'email'); ?>
	</div>
        

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Փոփոխել', array('class' => 'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->