<?php
/* @var $this GuestController */
/* @var $guest Guest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'guest-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($guest); ?>

	<div class="row">
		<?php echo $form->labelEx($guest,'user_id'); ?>
		<?php echo $form->textField($guest,'user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($guest,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'first_name'); ?>
		<?php echo $form->textField($guest,'first_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'last_name'); ?>
		<?php echo $form->textField($guest,'last_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'relationship'); ?>
		<?php echo $form->textField($guest,'relationship',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'relationship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'telephone_number'); ?>
		<?php echo $form->textField($guest,'telephone_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'telephone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'email'); ?>
		<?php echo $form->textField($guest,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'date_of_birth'); ?>
		<?php echo $form->textField($guest,'date_of_birth',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'dietary_requirements'); ?>
		<?php echo $form->textField($guest,'dietary_requirements',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'dietary_requirements'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'passport'); ?>
		<?php echo $form->textField($guest,'passport',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'passport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'special_requests'); ?>
		<?php echo $form->textField($guest,'special_requests',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'special_requests'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'nationality'); ?>
		<?php echo $form->textField($guest,'nationality',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'departure_date'); ?>
		<?php echo $form->textField($guest,'departure_date',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($guest,'departure_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'return_date'); ?>
		<?php echo $form->textField($guest,'return_date',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($guest,'return_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'airport_name'); ?>
		<?php echo $form->textField($guest,'airport_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'airport_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'airport_code'); ?>
		<?php echo $form->textField($guest,'airport_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'airport_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'hotel_arrival_date'); ?>
		<?php echo $form->textField($guest,'hotel_arrival_date',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($guest,'hotel_arrival_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'hotel_departure_date'); ?>
		<?php echo $form->textField($guest,'hotel_departure_date',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($guest,'hotel_departure_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'room_type'); ?>
		<?php echo $form->textField($guest,'room_type'); ?>
		<?php echo $form->error($guest,'room_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'created_at'); ?>
		<?php echo $form->textField($guest,'created_at'); ?>
		<?php echo $form->error($guest,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'created_by'); ?>
		<?php echo $form->textField($guest,'created_by'); ?>
		<?php echo $form->error($guest,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'updated_at'); ?>
		<?php echo $form->textField($guest,'updated_at'); ?>
		<?php echo $form->error($guest,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'updated_by'); ?>
		<?php echo $form->textField($guest,'updated_by'); ?>
		<?php echo $form->error($guest,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'ga_passport'); ?>
		<?php echo $form->textField($guest,'ga_passport',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'ga_passport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'ga_dateofbirth'); ?>
		<?php echo $form->textField($guest,'ga_dateofbirth',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'ga_dateofbirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'ga_firstname'); ?>
		<?php echo $form->textField($guest,'ga_firstname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'ga_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'ga_lastname'); ?>
		<?php echo $form->textField($guest,'ga_lastname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'ga_lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'ga_gender'); ?>
		<?php echo $form->textField($guest,'ga_gender',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'ga_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'ga_card_number'); ?>
		<?php echo $form->textField($guest,'ga_card_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'ga_card_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'ga_card_country'); ?>
		<?php echo $form->textField($guest,'ga_card_country',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'ga_card_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'ga_card_expiration_date'); ?>
		<?php echo $form->textField($guest,'ga_card_expiration_date',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'ga_card_expiration_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'ga_card_issue_date'); ?>
		<?php echo $form->textField($guest,'ga_card_issue_date',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'ga_card_issue_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'ga_redress_number'); ?>
		<?php echo $form->textField($guest,'ga_redress_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'ga_redress_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'destination_city'); ?>
		<?php echo $form->textField($guest,'destination_city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'destination_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'preferred_seat_request'); ?>
		<?php echo $form->textField($guest,'preferred_seat_request',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'preferred_seat_request'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'preferred_airline_frequent_flyer_number'); ?>
		<?php echo $form->textField($guest,'preferred_airline_frequent_flyer_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'preferred_airline_frequent_flyer_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'other'); ?>
		<?php echo $form->textField($guest,'other',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'need_visa'); ?>
		<?php echo $form->textField($guest,'need_visa',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'need_visa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'visa_letter'); ?>
		<?php echo $form->textField($guest,'visa_letter',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'visa_letter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'checked'); ?>
		<?php echo $form->textField($guest,'checked',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'checked'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'hotel_venue'); ?>
		<?php echo $form->textField($guest,'hotel_venue',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'hotel_venue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'team_dinner'); ?>
		<?php echo $form->textField($guest,'team_dinner',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'team_dinner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'team_dinner_menu'); ?>
		<?php echo $form->textField($guest,'team_dinner_menu',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'team_dinner_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'team_dinner_dietary'); ?>
		<?php echo $form->textField($guest,'team_dinner_dietary',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'team_dinner_dietary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'gala_dinner'); ?>
		<?php echo $form->textField($guest,'gala_dinner',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'gala_dinner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'gala_dinner_menu'); ?>
		<?php echo $form->textField($guest,'gala_dinner_menu',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'gala_dinner_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($guest,'gala_dinner_dietary'); ?>
		<?php echo $form->textField($guest,'gala_dinner_dietary',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($guest,'gala_dinner_dietary'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($guest->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->