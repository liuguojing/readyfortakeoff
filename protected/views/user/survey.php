<div class="row">
<div class="span12">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>
	<div class="row-fluid">
		<div class="span12">
			<p class="alert alert-success" style="margin-top:10px;" >Keeping in line with our E-volving theme this year, we are interested to hear from you on the following to be discussed at the IT Away Day:</p>
			<div class="control-group <?php if($model->getError('do_question')){ echo 'error';}?>">
				<label class="control-label" for="User_do_question"><?php echo $model->getAttributeLabel('do_question')?>:<span class="required">*</span></label>
				<label>What do you want the IT Leadership Team and/or IT Group to do more of? </label>
				<div class="controls">
					<?php echo $form->textarea($model,'do_question',array('style'=>'min-width:600px;min-height:80px;')); ?>
					<?php if($model->getError('do_question')){?><span class="help-inline"><?php echo $model->getError('do_question')?></span><?php }?>
				</div>
			</div>
			
			<div class="control-group <?php if($model->getError('donot_question')){ echo 'error';}?>">
				<label class="control-label" for="User_donot_question"><?php echo $model->getAttributeLabel('donot_question')?>:<span class="required">*</span></label>
				<label>What don’t you like and what do you want us to stop doing? </label>
				<div class="controls">
					<?php echo $form->textarea($model,'donot_question',array('style'=>'min-width:600px;min-height:80px;')); ?>
					<?php if($model->getError('donot_question')){?><span class="help-inline"><?php echo $model->getError('donot_question')?></span><?php }?>
				</div>
			</div>
			
			<div class="control-group <?php if($model->getError('develop_question')){ echo 'error';}?>">
				<label class="control-label" for="User_develop_question"><?php echo $model->getAttributeLabel('develop_question')?>:<span class="required">*</span></label>
				<label>What should we develop more of?</label>
				<div class="controls">
					<?php echo $form->textarea($model,'develop_question',array('style'=>'min-width:600px;min-height:80px;')); ?>
					<?php if($model->getError('develop_question')){?><span class="help-inline"><?php echo $model->getError('develop_question')?></span><?php }?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span12" style="text-align:center;">
				<button type="submit"  class="btn btn-success">Save & Proceed</button>
		</div>
	</div>

<?php $this->endWidget(); ?>
</div>


</div><!-- form -->