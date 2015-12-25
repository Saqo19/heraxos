<?php
foreach ($model as $value){ 
//        var_dump( strlen($value->title));exit;
?>
    <div class="block1" id="we">
        <div class="img"><span class="helper2"></span>
            <?php 
                if($value->image){ 
                        echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/banner/".$value->image,$value->image, array(
                    'class' => 'someClass1',
                )), array('view', 'id'=>$value->id));
                }else{
                        echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/banner/000.jpg", $value->image , array(
                    'class' => 'someClass1',
                )), array('view', 'id'=>$value->id));
                }

                ?>
        </div>
        
        <?php $str = wordwrap($value->title, 23);?>
        
         <?php echo CHtml::link($str, array('view', 'id'=>$value->id), array('class'=>'btn_my pad')); ?>
      
        <div>
        <span id="date_0"  class="bold"><?php echo CHtml::encode($value->time, array('size'=>10)); ?></span>
        <span id="price_0" class="price_red"><?php echo CHtml::encode($value->price); ?>AMD</span>
        </div>   
    </div>  
<?php    
}
?>