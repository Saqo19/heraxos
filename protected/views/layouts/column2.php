<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<center>
    <div class="span-5 last wi1">
            <div id="sidebar">
                <h2>Created by Sargis Mardanyan</h2>
            <?php
                    $this->beginWidget('zii.widgets.CPortlet', array(
                            'title'=>'Operations',
                    ));
                    $this->widget('zii.widgets.CMenu', array(
                            'items'=>$this->menu,
                            'htmlOptions'=>array('class'=>'operations'),
                    ));
                    $this->endWidget();
            ?>
            </div><!-- sidebar -->
    </div>
</center>
<?php $this->endContent(); ?>