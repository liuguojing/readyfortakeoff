<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/report'); ?>
<div class="row">
	<div class="span10">
		<div id="container">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span2">
		<div id="navbar">
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
</div>
<?php $this->endContent(); ?>