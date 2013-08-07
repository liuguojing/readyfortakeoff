<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'display_name'); ?>
		<?php echo $form->textField($model,'display_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'display_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_title'); ?>
		<?php echo $form->textField($model,'job_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'job_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_number'); ?>
		<?php echo $form->textField($model,'employee_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'employee_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_telephone'); ?>
		<?php echo $form->textField($model,'mobile_telephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mobile_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personal_or_business_number'); ?>
		<?php echo $form->textField($model,'personal_or_business_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'personal_or_business_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emergency_contact_name'); ?>
		<?php echo $form->textField($model,'emergency_contact_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emergency_contact_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emergency_contact_telephone_number'); ?>
		<?php echo $form->textField($model,'emergency_contact_telephone_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emergency_contact_telephone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'twitter_account'); ?>
		<?php echo $form->textField($model,'twitter_account',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'twitter_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'special_requirements'); ?>
		<?php echo $form->textArea($model,'special_requirements',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'special_requirements'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'specific_medical_conditions'); ?>
		<?php echo $form->textArea($model,'specific_medical_conditions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'specific_medical_conditions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'office'); ?>
		<?php echo $form->textField($model,'office',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'office'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outbound_time'); ?>
		<?php echo $form->textField($model,'outbound_time',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'outbound_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'return_time'); ?>
		<?php echo $form->textField($model,'return_time',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'return_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'do_question'); ?>
		<?php echo $form->textArea($model,'do_question',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'do_question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'donot_question'); ?>
		<?php echo $form->textArea($model,'donot_question',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'donot_question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'develop_question'); ?>
		<?php echo $form->textArea($model,'develop_question',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'develop_question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->