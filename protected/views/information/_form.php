<?php
/* @var $this InformationController */
/* @var $model Information */
/* @var $form CActiveForm */
//form options array...

?>

<div class="form mycontent">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'information-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	        'htmlOptions' => array(
	        'enctype' => 'multipart/form-data',
	    ),
	)); ?>

        <div class="form-group row">
		<?php echo $form->labelEx($model,'full_name', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textField($model,'full_name',array('size'=>60,'maxlength'=>256, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'full_name'); ?>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'location', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php
                $records = Location::model()->findAll(array('order' => 'location'));
                $lis = CHtml::listData($records, 'id','location');
                echo CHtml::dropDownList('location', null, $lis, array('empty' => 'Select Location', 'class' => 'form-control-drop'));
                ?>
        </div>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'phone', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php
                $records = Phone::model()->findAll(array('order' => 'phone'));
                $list = CHtml::listData($records, 'id','phone');
                echo CHtml::dropDownList('phone', null, $list, array('empty' => 'Select Model', 'class' => 'form-control-drop'));
                ?>
        </div>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'price', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textField($model,'price',array('size'=>60,'maxlength'=>256, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'title', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>43, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'description', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50, 'class' => 'form-control-desc')); ?>
		</div>
		<?php echo $form->error($model,'description'); ?>
	</div>

	

	<div class="form-group row">
		<?php echo $form->labelEx($model,'number', array('class' => 'control-label')); ?>
		<?php echo $form->textField($model,'number',array('class' => 'form-control-number')); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>
    
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="max-width: 200px; max-height: 150px;"></div>
            <div>
                <span class="btn btn-default btn-file"><span class="fileinput-new">
                    <?php echo $form->fileField($model,'image'); ?>
                    </span>
                    <span class="fileinput-exists">Փոխել</span>
                    <input type="file" name="...">
                </span>
                <a href="#" class="btn btn-default fileinput-exists delete1" data-dismiss="fileinput">Ջնջել</a>
            </div>
        </div>
        
        
        
        <?php echo $form->error($model,'image'); ?>
    </div>

        
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ավելացնել' : 'Save', array('class' => 'btn btn-success marg15')); ?>
	</div>

<?php $this->endWidget(); ?>

