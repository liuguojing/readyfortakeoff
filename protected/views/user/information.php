<div class="row">
<div class="span12">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>
	<p class="label" style="margin:10px;">Fields with <span class="required">*</span> are required.</p>
	<div class="row-fluid">
		<div class="span5 offset1">
			<div class="control-group <?php if($model->getError('display_name')){ echo 'error';}?>">
				<label class="control-label" for="User_display_name"><?php echo $model->getAttributeLabel('display_name')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->textField($model,'display_name',array('placeholder'=>$model->getAttributeLabel('display_name'))); ?>
					<?php if($model->getError('display_name')){?><span class="help-inline"><?php echo $model->getError('display_name')?></span><?php }?>
				</div>
				<span class="label label-info">*Note to specify that this will be the name displayed on your badge</span>
			</div>
			
			<div class="control-group <?php if($model->getError('job_title')){ echo 'error';}?>">
				<label class="control-label" for="User_job_title"><?php echo $model->getAttributeLabel('job_title')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->textField($model,'job_title',array('placeholder'=>$model->getAttributeLabel('job_title'))); ?>
					<?php if($model->getError('job_title')){?><span class="help-inline"><?php echo $model->getError('job_title')?></span><?php }?>
				</div>
			</div>
			
			<div class="control-group <?php if($model->getError('department')){ echo 'error';}?>">
				<label class="control-label" for="User_department"><?php echo $model->getAttributeLabel('department')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->dropDownList($model,'department',$model->departmentOptions(),array('empty' => '')); ?>
					<?php if($model->getError('department')){?><span class="help-inline"><?php echo $model->getError('department')?></span><?php }?>
				</div>
			</div>
			
			<div class="control-group <?php if($model->getError('employee_number')){ echo 'error';}?>">
				<label class="control-label" for="User_employee_number"><?php echo $model->getAttributeLabel('employee_number')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->textField($model,'employee_number',array('placeholder'=>$model->getAttributeLabel('employee_number'))); ?>
					<?php if($model->getError('employee_number')){?><span class="help-inline"><?php echo $model->getError('employee_number')?></span><?php }?>
				</div>
			</div>
			<div class="control-group <?php if($model->getError('telephone')){ echo 'error';}?>">
				<label class="control-label" for="User_telephone"><?php echo $model->getAttributeLabel('telephone')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->textField($model,'telephone',array('placeholder'=>$model->getAttributeLabel('telephone'))); ?>
					<?php if($model->getError('telephone')){?><span class="help-inline"><?php echo $model->getError('telephone')?></span><?php }?>
				</div>
			</div>
			
			<div class="control-group <?php if($model->getError('mobile_telephone')){ echo 'error';}?>">
				<label class="control-label" for="User_mobile_telephone"><?php echo $model->getAttributeLabel('mobile_telephone')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->textField($model,'mobile_telephone',array('placeholder'=>$model->getAttributeLabel('mobile_telephone'))); ?>
					<?php if($model->getError('mobile_telephone')){?><span class="help-inline"><?php echo $model->getError('mobile_telephone')?></span><?php }?>
				</div>
			</div>
			
			<div class="control-group <?php if($model->getError('personal_or_business_number')){ echo 'error';}?>">
				<label class="control-label" for="User_personal_or_business_number"><?php echo $model->getAttributeLabel('personal_or_business_number')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->radioButtonList($model,'personal_or_business_number',array('Personal Number'=>'Personal Number','Business Number'=>'Business Number'),array('separator' => '', 'template' => '<li class="q6" style="list-style: none outside none;display:block;float:left;margin:10px;">{input} {label} </li>&nbsp;&nbsp;', 'labelOptions' => array('style' => 'display:inline;'))); ?>
					<?php if($model->getError('personal_or_business_number')){?><span class="help-inline"><?php echo $model->getError('personal_or_business_number')?></span><?php }?>
				</div>
				<div style="clear:both;">
				</div>
			</div>
			<div class="control-group <?php if($model->getError('emergency_contact_name')){ echo 'error';}?>">
				<label class="control-label" for="User_emergency_contact_name"><?php echo $model->getAttributeLabel('emergency_contact_name')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->textField($model,'emergency_contact_name',array('placeholder'=>$model->getAttributeLabel('emergency_contact_name'))); ?>
					<?php if($model->getError('emergency_contact_name')){?><span class="help-inline"><?php echo $model->getError('emergency_contact_name')?></span><?php }?>
				</div>
			</div>
			<div class="control-group <?php if($model->getError('emergency_contact_telephone_number')){ echo 'error';}?>">
				<label class="control-label" for="User_emergency_contact_telephone_number"><?php echo $model->getAttributeLabel('emergency_contact_telephone_number')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->textField($model,'emergency_contact_telephone_number',array('placeholder'=>$model->getAttributeLabel('emergency_contact_telephone_number'))); ?>
					<?php if($model->getError('emergency_contact_telephone_number')){?><span class="help-inline"><?php echo $model->getError('emergency_contact_telephone_number')?></span><?php }?>
				</div>
			</div>
		</div>
		<div class="span5">
			
			<div class="control-group <?php if($model->getError('email')){ echo 'error';}?>">
				<label class="control-label" for="User_email"><?php echo $model->getAttributeLabel('email')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->textField($model,'email',array('placeholder'=>$model->getAttributeLabel('email'),'readonly'=>'readonly')); ?>
					<?php if($model->getError('email')){?><span class="help-inline"><?php echo $model->getError('email')?></span><?php }?>
				</div>
			</div>
			
			<div class="control-group <?php if($model->getError('twitter_account')){ echo 'error';}?>">
				<label class="control-label" for="User_twitter_account"><?php echo $model->getAttributeLabel('twitter_account')?>:</label>
				<div class="controls">
					<?php echo $form->textField($model,'twitter_account',array('placeholder'=>$model->getAttributeLabel('twitter_account'))); ?>
					<?php if($model->getError('twitter_account')){?><span class="help-inline"><?php echo $model->getError('twitter_account')?></span><?php }?>
				</div>
			</div>
			
			<div class="control-group <?php if($model->getError('special_requirements')){ echo 'error';}?>">
				<label class="control-label" for="User_special_requirements"><?php echo $model->getAttributeLabel('special_requirements')?></label>
				<div class="controls">
					<?php echo $form->textArea($model,'special_requirements',array('style'=>'height:80px;')); ?>
					<?php if($model->getError('special_requirements')){?><span class="help-inline"><?php echo $model->getError('special_requirements')?></span><?php }?>
				</div>
			</div>
			
			<div class="control-group <?php if($model->getError('specific_medical_conditions')){ echo 'error';}?>">
				<label class="control-label" for="User_specific_medical_conditions"><?php echo $model->getAttributeLabel('specific_medical_conditions')?></label>
				<div class="controls">
					<?php echo $form->textArea($model,'specific_medical_conditions',array('style'=>'height:80px;')); ?>
					<?php if($model->getError('specific_medical_conditions')){?><span class="help-inline"><?php echo $model->getError('specific_medical_conditions')?></span><?php }?>
				</div>
			</div>
			
			<div class="control-group <?php if($model->getError('office')){ echo 'error';}?>">
				<label class="control-label" for="User_office"><?php echo $model->getAttributeLabel('office')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->dropDownList($model,'office',$model->officeOptions(),array('empty'=>'','style'=>'width:320px;')); ?>
					<?php if($model->getError('office')){?><span class="help-inline"><?php echo $model->getError('office')?></span><?php }?>
				</div>
			</div>
			
			<div id="time" class="control-group <?php if($model->office!='Stockley Park'){echo 'hide';}?> <?php if($model->getError('outbound_time')){ echo 'error';}?> <?php if($model->getError('return_time')){ echo 'error';}?>">
				<label class="control-label" for="User_outbound_time"><?php echo $model->getAttributeLabel('outbound_time')?>:<span class="required">*</span></label>
				<div class="controls">
					<?php echo $form->dropDownList($model,'outbound_time',$model->outboundTimeOptions(),array('empty'=>'')); ?>
					<?php echo $form->dropDownList($model,'return_time',$model->returnTimeOptions(),array('empty'=>'')); ?>
					<?php if($model->getError('outbound_time')){?><span class="help-inline"><?php echo $model->getError('outbound_time')?></span><?php }?>
					<?php if($model->getError('return_time')){?><span class="help-inline"><?php echo $model->getError('return_time')?></span><?php }?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span12" style="text-align:center;">
				<button type="submit"  class="btn btn-large btn-success">Save & Proceed</button>
		</div>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->
<div class="row">
	<div class="span12" style="margin-top:40px;font-size:10px;color:#555;">
		<p>None of this information is going to be shared outside M&S</p>
	</div>
</div>
<script>
function showTime(){
	if($('#User_office').val() == 'Stockley Park'){
		$('#time').show();
	}else{
		$('#time').hide();
		$('#User_outbound_time').val('');
		$('#User_return_time').val('');
	}
}
$(function() {
	$('#User_office').change(function(){
			if($('#User_office').val() == 'Stockley Park'){
				$('#time').show();
			}else{
				$('#time').hide();
				$('#User_outbound_time').val('');
				$('#User_return_time').val('');
			}
		});
});
</script>