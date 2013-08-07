<div class="container top">
	<h1>Check-in Portal</h1>
	<div class="row">
		<?php
			foreach(Yii::app()->user->getFlashes() as $key => $message) {
				echo '<div class="span12"><p class="alert alert-' . $key . '">' . $message . "</p></div>\n";
			}
		?>
		<div class="span12 form-horizontal" >
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'user-form',
			'enableAjaxValidation'=>false,
			'htmlOptions'=>array('class'=>'form-inline'),
		)); ?>
				<?php echo $form->textField($model,'id',array('placeholder'=>$model->getAttributeLabel('id'))); ?>
				<?php if($model->getError('id')){?><span class="help-inline"><?php echo $model->getError('id')?></span><?php }?>
				<button type="submit"  class="btn  btn-warning">Enter</button>
		</div>
		<?php $this->endWidget(); ?>
	</div>
</div>
<script>
	$('#User_id').focus();
</script>