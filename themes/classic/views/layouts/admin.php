<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/report'); ?>
<div class="container top">
<div class="row">
	<div class="span10">
		<?php echo $content; ?>
	</div><!-- content -->
	<div class="span2">
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
	</div>
</div>
</div>
<?php $this->endContent(); ?>