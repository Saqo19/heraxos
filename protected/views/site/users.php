<?php
/* @var $this RegController */
/* @var $model Reg */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'reg-form',
    'enableAjaxValidation'=>false,
)); ?>


    <div class="form-group row">
        <?php echo $form->labelEx($model,'username', array('class' => 'control-label')); ?>
        <div class="leb">
        <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
        </div>
        <?php echo $form->error($model,'username'); ?>
    </div>

    <div class="form-group row">
        <?php echo $form->labelEx($model,'password', array('class' => 'control-label')); ?>
        <div class="leb">
        <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
        </div>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="form-group row">
        <?php echo $form->labelEx($model,'full_name', array('class' => 'control-label')); ?>
        <div class="leb">
        <?php echo $form->textField($model,'full_name',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
        </div>
        <?php echo $form->error($model,'full_name'); ?>
    </div>
    
    <div class="form-group row">
        <?php echo $form->labelEx($model,'number', array('class' => 'control-label')); ?>
        <div class="leb">
        <?php echo $form->textField($model,'number',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
        </div>
        <?php echo $form->error($model,'number'); ?>
    </div>

    <div class="form-group row">
        <?php echo $form->labelEx($model,'email', array('class' => 'control-label')); ?>
        <div class="leb">
        <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
        </div>
        <?php echo $form->error($model,'email'); ?>
    </div>


    <div class="form-group row">
        <?php echo $form->labelEx($model,'location', array('class' => 'control-label')); ?>
        <div class="leb">
        <?php
                $records = Location::model()->findAll(array('order' => 'location'));
                $lis = CHtml::listData($records, 'id','location');
                echo CHtml::dropDownList('location', null, $lis, array('empty' => 'Ընտրել տարածաշրջանը', 'class' => 'form-control-drop'));
                ?>
        </div>
        <?php echo $form->error($model,'location'); ?>
    </div>
    <div class="form-group row">
        <?php echo $form->textField($model,'verifyCode', array('class' => 'form-control-log1')); ?>
        <?php $this->widget('CCaptcha'); ?>
        <?php echo $form->error($model,'verifyCode'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Գրանցվել' : 'Save', array('class' => 'btn btn-success marg15')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->