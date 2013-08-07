<?php
/* @var $this UserController */
/* @var $model User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('display_name')); ?>:</b>
	<?php echo CHtml::encode($data->display_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_title')); ?>:</b>
	<?php echo CHtml::encode($data->job_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_number')); ?>:</b>
	<?php echo CHtml::encode($data->employee_number); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone')); ?>:</b>
	<?php echo CHtml::encode($data->telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_telephone')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personal_or_business_number')); ?>:</b>
	<?php echo CHtml::encode($data->personal_or_business_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_contact_name')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_contact_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_contact_telephone_number')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_contact_telephone_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('twitter_account')); ?>:</b>
	<?php echo CHtml::encode($data->twitter_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('special_requirements')); ?>:</b>
	<?php echo CHtml::encode($data->special_requirements); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('specific_medical_conditions')); ?>:</b>
	<?php echo CHtml::encode($data->specific_medical_conditions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('office')); ?>:</b>
	<?php echo CHtml::encode($data->office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outbound_time')); ?>:</b>
	<?php echo CHtml::encode($data->outbound_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('return_time')); ?>:</b>
	<?php echo CHtml::encode($data->return_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('do_question')); ?>:</b>
	<?php echo CHtml::encode($data->do_question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('donot_question')); ?>:</b>
	<?php echo CHtml::encode($data->donot_question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('develop_question')); ?>:</b>
	<?php echo CHtml::encode($data->develop_question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	*/ ?>

</div>