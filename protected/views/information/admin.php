<?php
/* @var $this RegController */
/* @var $model Reg */

Yii::app()->clientScript->registerScript('search', "

$('.search-form form').submit(function(){
	$('#reg-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>
      
    <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256, 'placeholder'=>'Նշել վերնագիրը', 'class' => 'form-control-search')); ?>
    <?php
        $records = Phone::model()->findAll(array('order' => 'phone'));
        echo $form->dropDownList($model,'phone', CHtml::listData($records, 'phone','phone'), array('empty'=>'Ընտրել Մոդելը', 'class' => 'form-control-drop-s'));
    ?>
    <?php echo CHtml::submitButton('Որոնել', array('class' => 'btn btn-success')); ?>
	
<?php $this->endWidget(); ?>

</div><!-- search-form -->
<div class ="cont">
    <?php $this->renderPartial('top', array(
        'model'=>$model1,
    )); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reg-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	
)); ?>
